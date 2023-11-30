<?php

namespace App\Scopes;

use Statamic\Query\Scopes\Scope;

class HasServices extends Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply($query, $values)
    {
        if (count($values)) {
            $query
                ->whereJsonContains('services', $values['services']);
        }
    }
}
