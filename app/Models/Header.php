<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    private static $header, $headers;

    public static function createHeader($request)
    {
        self::$header                          = new Header();
        self::saveBasicInfo(new Header(), $request);
        self::$header->save();
    }

    public static function updateHeader($request, $id)
    {
        self::$header = Header::find($id);
        self::saveBasicInfo(self::$header, $request);
        self::$header->update();
    }
    public static function deleteHeader($id)
    {
        self::$header = Header::find($id);
        self::$header->delete();
    }

    private static function saveBasicInfo($header, $request)
    {
        self::$header->heading                 = $request->heading;
        self::$header->name                    = $request->name;
        self::$header->description             = $request->description;
    }


}
