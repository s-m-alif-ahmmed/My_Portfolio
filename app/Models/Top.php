<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;

    private static $top, $tops;

    public static function createTop($request)
    {
        self::$top                          = new Top();
        self::saveBasicInfo(new Top(), $request);
        self::$top->save();
    }

    public static function updateTop($request, $id)
    {
        self::$top = Top::find($id);
        self::saveBasicInfo(self::$top, $request);
        self::$top->update();
    }
    public static function deleteTop($id)
    {
        self::$top = Top::find($id);
        self::$top->delete();
    }

    private static function saveBasicInfo($top, $request)
    {
        self::$top->heading                 = $request->heading;
        self::$top->name                    = $request->name;
        self::$top->description             = $request->description;
    }

}
