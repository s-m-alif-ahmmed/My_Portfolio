<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementTitle extends Model
{
    use HasFactory;

    private static $achievement_title, $achievement_titles;

    public static function createAchievementTitle($request)
    {
        self::$achievement_title          = new AchievementTitle();
        self::saveBasicInfo(new AchievementTitle(), $request);
        self::$achievement_title->save();
    }

    public static function updateAchievementTitle($request, $id)
    {
        self::$achievement_title = AchievementTitle::find($id);
        self::saveBasicInfo(self::$achievement_title, $request);
        self::$achievement_title->update();
    }
    public static function deleteAchievementTitle($id)
    {
        self::$achievement_title = AchievementTitle::find($id);
        self::$achievement_title->delete();
    }

    private static function saveBasicInfo($achievement_title, $request)
    {
        self::$achievement_title->heading                 = $request->heading;
        self::$achievement_title->name                    = $request->name;
    }

}
