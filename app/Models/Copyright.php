<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    use HasFactory;

    private static $copyright, $copyrights;

    public static function createCopyright($request)
    {
        self::$copyright                          = new Copyright();
        self::saveBasicInfo(new Copyright(), $request);
        self::$copyright->save();
    }

    public static function updateCopyright($request, $id)
    {
        self::$copyright = Copyright::find($id);
        self::saveBasicInfo(self::$copyright, $request);
        self::$copyright->update();

    }
    public static function deleteCopyright($id)
    {
        self::$copyright = Copyright::find($id);
        self::$copyright->delete();
    }

    private static function saveBasicInfo($copyright, $request)
    {
        self::$copyright->copyright         = $request->copyright;
    }

}
