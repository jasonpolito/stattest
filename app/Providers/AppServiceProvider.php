<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;
use Stillat\Relationships\Support\Facades\Relate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ini_set('max_execution_time', '30');
        Relate::manyToMany(
            'locations.related_doctors',
            'doctors.related_locations'
        );
        Relate::manyToMany(
            'services.staff',
            'staff.services'
        );
        Relate::manyToMany(
            'locations.staff',
            'staff.locations'
        );
        Relate::manyToMany(
            'locations.services',
            'services.locations'
        );
        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);
    }
}
