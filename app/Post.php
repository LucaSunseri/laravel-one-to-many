<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = [
        'title',
        'content',
        'slug'
    ];


    static function gerateSlug($string)
    {

        $slug = Str::slug($string);
        $original_slug = $slug;
        $count = 1;

        while (static::whereSlug($slug)->exists()) {

            $slug = $original_slug . '-' . $count++;
        }

        return $slug;
    }
}
