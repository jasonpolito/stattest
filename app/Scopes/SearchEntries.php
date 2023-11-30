<?php

namespace App\Scopes;

use Statamic\Entries\Entry;
use Statamic\Query\Scopes\Scope;

class SearchEntries extends Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply($query, $values)
    {
        $cities = $values['cities'];
        $services = $values['services'];
        $searchterms = $values['searchterms'];
        if ($searchterms) {
            $query->orWhere('searchterms', 'like', "%$searchterms%");
        }
        if ($cities) {
            if (count($cities) && $values['from'] == 'locations') {
                // dd($cities);
                $query->whereIn('city', $cities);
            }
            if (count($cities) && ($values['from'] == 'staff' || $values['from'] == 'services')) {
                $locationIds = Entry::query()
                    ->where('collection', 'locations')
                    ->whereIn('city', $cities)
                    ->get()
                    ->pluck('id')
                    ->toArray();
                $query->whereJsonContains('locations', $locationIds);
            }
        }
        if ($services) {
            $query
                ->whereJsonContains('services', $services);
        }
    }
}
