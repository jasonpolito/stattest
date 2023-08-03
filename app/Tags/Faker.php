<?php

namespace App\Tags;

use Faker\Factory as FakerFactory;
use Statamic\Tags\Tags;

class Faker extends Tags
{
    protected static $handle = 'faker';

    public function __construct()
    {
        $this->faker = FakerFactory::create();
    }

    /**
     * The {{ faker:$method }} tag.
     *
     * @return string|array
     */
    public function __call($method, $arguments)
    {
        $args = $this->params->explode('args');
        return $this->faker->$method(...$args);
    }
}
