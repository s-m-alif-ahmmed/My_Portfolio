<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    private static $achievement, $achievements;

    public static function createAchievement($request)
    {
        self::$achievement        = new Achievement();
        self::saveBasicInfo(new Achievement(), $request);
        self::$achievement->save();
    }

    public static function updateAchievement($request, $id)
    {
        self::$achievement = Achievement::find($id);
        self::saveBasicInfo(self::$achievement, $request);
        self::$achievement->update();
    }
    public static function deleteAchievement($id)
    {
        self::$achievement = Achievement::find($id);
        self::$achievement->delete();
    }

    private static function saveBasicInfo($achievement, $request)
    {
        self::$achievement->icon                = $request->icon;
        self::$achievement->name                = $request->name;
        self::$achievement->number              = $request->number;
    }

}
