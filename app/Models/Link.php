<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    private static $link, $links;

    public static function createLink($request)
    {
        self::$link                          = new Link();
        self::saveBasicInfo(new Link(), $request);
        self::$link->save();
    }

    public static function updateLink($request, $id)
    {
        self::$link = Link::find($id);
        self::saveBasicInfo(self::$link, $request);
        self::$link->update();
    }
    public static function deleteLink($id)
    {
        self::$link = Link::find($id);
        self::$link->delete();
    }

    private static function saveBasicInfo($link, $request)
    {
        self::$link->icon                   = $request->icon;
        self::$link->link                   = $request->link;
    }

}
