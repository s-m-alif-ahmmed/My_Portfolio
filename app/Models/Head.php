<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;

    private static $head, $heads;

    public static function createHead($request)
    {
        self::$head                          = new Head();
        self::saveBasicInfo(new Head(), $request);
        self::$head->save();
    }

    public static function updateHead($request, $id)
    {
        self::$head = Head::find($id);
        self::saveBasicInfo(self::$head, $request);
        self::$head->update();
    }
    public static function deleteHead($id)
    {
        self::$head = Head::find($id);
        self::$head->delete();
    }

    private static function saveBasicInfo($head, $request)
    {
        self::$head->name                    = $request->name;
        self::$head->description             = $request->description;
    }

}
