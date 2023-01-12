<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;
class Comic extends Model
{
    use HasFactory;

    //generare unicità dello slug

    public static function generateSlug($string){

        $slug = Str::slug($string, '-');

        $new_slug = $slug;
        $c=1;
        $comic_exists = Comic::where('slug', $slug)->first();
        while($comic_exists){
            $slug = $new_slug . '-' .$c;
            $comic_exists = Comic::where('slug', $slug)->first();
            $c++;


        }
        return $slug;

    }
}
