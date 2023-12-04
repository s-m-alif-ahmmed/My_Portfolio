<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    use HasFactory;

    private static $heading, $headings;

    public static function createHeading($request)
    {
        self::$heading                          = new Heading();
        self::saveBasicInfo(new Heading(), $request);
        self::$heading->save();
    }

    public static function updateHeading($request, $id)
    {
        self::$heading = Heading::find($id);
        self::saveBasicInfo(self::$heading, $request);
        self::$heading->update();
    }
    public static function deleteHeading($id)
    {
        self::$heading = Heading::find($id);
        self::$heading->delete();
    }

    private static function saveBasicInfo($heading, $request)
    {
        self::$heading->heading                 = $request->heading;
        self::$heading->name                    = $request->name;
        self::$heading->description             = $request->description;
    }

}
