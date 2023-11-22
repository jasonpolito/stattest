<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Statamic\Facades\Entry;

class HasServices implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model, $values = ''): void
    {
        ddd('testing');
        $builder
            ->whereHas('services', function ($q) use ($values) {
                $q->whereIn('id', $values);
            });
    }
}
