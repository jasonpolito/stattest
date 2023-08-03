<?php

namespace App\Tags;

use Statamic\Globals\GlobalSet;
use Statamic\Tags\Tags;
use Illuminate\Support\Str;

class GetVar extends Tags
{

    /**
     * The {{ get }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    /**
     * The {{ get:example }} tag.
     *
     * @return string|array
     */
    public function __call($handle, $args)
    {
        $varData = GlobalSet::findByHandle('variables')->fileData()['data']['variables'];
        $var = array_filter($varData, function ($item) use ($handle) {
            return $item['handle'] == Str::snake($handle);
        });
        if (count($var)) {
            return $var[0]['text'];
        }
    }
}
