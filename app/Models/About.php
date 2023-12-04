<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $about, $abouts;

    public static function createAbout($request)
    {
        self::$about          = new About();
        self::saveBasicInfo(new About(), $request);
        self::$about->save();
    }

    public static function updateAbout($request, $id)
    {
        self::$about = About::find($id);
        self::saveBasicInfo(self::$about, $request);
        self::$about->update();
    }
    public static function deleteAbout($id)
    {
        self::$about = About::find($id);
        self::$about->delete();
    }

    private static function saveBasicInfo($about, $request)
    {
        self::$about->name                = $request->name;
        self::$about->percent             = $request->percent;
    }

}
