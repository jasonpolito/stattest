<?php

namespace App\Scopes;

use Statamic\Query\Scopes\Scope;

class InCity extends Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply($query, $values)
    {
        dd($values);
        $query
            ->where('services', $values['services']);
    }
}
