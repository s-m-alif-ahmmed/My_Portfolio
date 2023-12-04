<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    private static $content, $contents;

    public static function createContent($request)
    {
        self::$content                          = new Content();
        self::saveBasicInfo(new Content(), $request);
        self::$content->save();
    }

    public static function updateContent($request, $id)
    {
        self::$content = Content::find($id);
        self::saveBasicInfo(self::$content, $request);
        self::$content->update();
    }
    public static function deleteContent($id)
    {
        self::$content = Content::find($id);
        self::$content->delete();
    }

    private static function saveBasicInfo($content, $request)
    {
        self::$content->heading                 = $request->heading;
        self::$content->name                    = $request->name;
        self::$content->description             = $request->description;
    }


}
