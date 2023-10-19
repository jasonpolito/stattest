<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Stillat\Relationships\Support\Facades\Relate;

class EntryRelationsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Sync locations and staff
        Relate::manyToMany(
            'locations.related_doctors',
            'doctors.related_locations'
        );

        // Sync staff and services
        Relate::manyToMany(
            'services.staff',
            'staff.services'
        );

        // Sync staff and locations
        Relate::manyToMany(
            'locations.staff',
            'staff.locations'
        );

        // Sync services and locations
        Relate::manyToMany(
            'locations.services',
            'services.locations'
        );
    }
}
