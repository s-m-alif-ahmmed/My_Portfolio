<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureTitle extends Model
{
    use HasFactory;

    private static $feature_title, $feature_titles, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/feature_title/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createFeatureTitle($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$feature_title                          = new FeatureTitle();
        self::saveBasicInfo(new FeatureTitle(), $request, self::$imageUrl);
        self::$feature_title->save();
    }

    public static function updateFeatureTitle($request, $id)
    {
        self::$feature_title = FeatureTitle::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$feature_title->image)){
                unlink(self::$feature_title->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$feature_title->image;
        }
        self::saveBasicInfo(self::$feature_title, $request, self::$imageUrl);
        self::$feature_title->update();

    }
    public static function deleteFeatureTitle($id)
    {
        self::$feature_title = FeatureTitle::find($id);
        if (file_exists(self::$feature_title->image))
        {
            unlink(self::$feature_title->image);
        }
        self::$feature_title->delete();
    }

    private static function saveBasicInfo($feature_title, $request, $imageUrl)
    {
        self::$feature_title->heading                 = $request->heading;
        self::$feature_title->name                    = $request->name;
        self::$feature_title->main_description        = $request->main_description;
        self::$feature_title->image                   = self::$imageUrl;
    }

}
