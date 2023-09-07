<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Statamic\Entries\Entry;

class ImportController extends Controller
{

    public function makeBio(array $data): string
    {
        $education = $data[7];
        $residency = $data[8];
        $fellowship = $data[8];
        $bio = "
            <h4>Medical Education</h4>
            <p>$education</p>
            <h4>Residency</h4>
            <p>$residency</p>
            <h4>Fellowship</h4>
            <p>$fellowship</p>
        ";
        return $bio;
    }

    /**
     * Create a new staff member from CSV data
     *
     * @param array $data
     * @return Entry
     */
    public function makeStaff(array $data): Entry
    {
        $fname = $data[0];
        $lname = $data[1];
        $degree = $data[2];
        $bio = $this->makeBio($data);
        $staff = Entry::make()
            ->collection('staff')
            ->slug(Str::slug(implode(' ', [$fname, $lname])))
            ->data([
                'title' => "$fname $lname, $degree",
                'first_name' => $fname,
                'last_name' => $lname,
                'degree' => $degree,
                'bio' => $bio,
            ]);

        $staff->save();
        return $staff;
    }

    /**
     * Create a new service from CSV data
     *
     * @param array $data
     * @return Entry
     */
    public function makeService(array $data): Entry
    {
        $serviceName = $data[4];
        $serviceSlug = Str::slug($serviceName);
        $service = Entry::query()->where('slug', $serviceSlug)->first();
        if (!$service) {
            $service = Entry::make()
                ->collection('services')
                ->slug($serviceSlug)
                ->data([
                    'title' => $serviceName
                ]);
            $service->save();
        }
        return $service;
    }

    /**
     * Attach a service to a staff member services array
     *
     * @param Entry $service
     * @param Entry $staff
     * @return void
     */
    public function attachServiceToStaff(Entry $service, Entry $staff): void
    {
        $staff->set('primary_specialty', $service->id);
        $staff->set('services', [$service->id]);
        $staff->save();
    }

    /**
     * Attach a staff to a service's staff array
     *
     * @param Entry $staff
     * @param Entry $service
     * @return void
     */
    public function attachStaffToService(Entry $staff, Entry $service): void
    {
        $allStaff = $service->get('staff') ?? [];
        array_push($allStaff, $staff->id);
        $service->set('staff', $allStaff);
        $service->save();
    }


    /**
     * Show number of records imported
     *
     * @return void
     */
    public function showImportCount(): void
    {
        $staffCount = Entry::query()->where('collection', 'staff')->count();
        $servicesCount = Entry::query()->where('collection', 'services')->count();
        echo "Successfully imported $staffCount staff and $servicesCount services!";
    }

    /**
     * Import CSV and create records from data
     *
     * @return void
     */
    public function import()
    {
        $limit = 20;
        if (($handle = fopen(resource_path() . "/data/doctor_export.csv", "r")) !== FALSE) {
            $count = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE && $count < $limit) {
                if ($count) {
                    $staff = $this->makeStaff($data);
                    $service = $this->makeService($data);
                    $this->attachServiceToStaff($service, $staff);
                    $this->attachStaffToService($staff, $service);
                }
                $count++;
            }
            fclose($handle);
            $this->showImportCount();
        }
    }
}
