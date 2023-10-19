<?php

namespace App\Providers;

use Statamic\Facades\Collection;
use Illuminate\Support\ServiceProvider;

class EntryComputedValuesProvider extends ServiceProvider
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
        Collection::computed('staff', 'full_name', function ($entry) {
            $firstName = $entry->get('first_name');
            $lastName = $entry->get('last_name');
            $degree = $entry->get('degree');
            return $degree ? "$firstName $lastName, $degree" : "$firstName $lastName";
        });
    }
}
