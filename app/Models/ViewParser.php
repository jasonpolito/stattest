<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ViewParser extends Model
{
    use HasFactory;

    public static function parseVariables($str): array
    {
        $res = [];
        $patterns = [
            '/\$([a-zA-z0-9-_]+\b)/i', // basic
            '/\{{2}\s*([\$\!a-z\d_(\->)\?\:\'\"\s]+)\s*\}{2}/i', // basic
            '/\{\!\!\s*\$([a-z\d_(\->)]+)\s*\!\!\}/i' // raw
        ];
        foreach ($patterns as $pattern) {
            preg_match_all($pattern, $str, $matches);
            if (count($matches[1])) {
                // dd($matches);
                $res = $matches[1];
                // dd($matches);
                // foreach ($matches[1] as $match) {
                //     dd($match);
                //     array_push($res, explode('->', $match)[0]);
                // }
            }
        }
        return $res;
    }
}
