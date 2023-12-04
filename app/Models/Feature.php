<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    private static $feature, $features;


    public static function createFeature($request)
    {
        self::$feature                          = new Feature();
        self::saveBasicInfo(new Feature(), $request);
        self::$feature->save();
    }

    public static function updateFeature($request, $id)
    {
        self::$feature = Feature::find($id);
        self::saveBasicInfo(self::$feature, $request);
        self::$feature->update();

    }
    public static function deleteFeature($id)
    {
        self::$feature = Feature::find($id);
        self::$feature->delete();
    }

    private static function saveBasicInfo($feature, $request)
    {
        self::$feature->icon                = $request->icon;
        self::$feature->feature             = $request->feature;
        self::$feature->description         = $request->description;
    }

}
