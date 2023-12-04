<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTitle extends Model
{
    use HasFactory;

    private static $about_title, $about_titles, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/about-title/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createAboutTitle($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$about_title                          = new AboutTitle();
        self::saveBasicInfo(new AboutTitle(), $request, self::$imageUrl);
        self::$about_title->save();
    }

    public static function updateAboutTitle($request, $id)
    {
        self::$about_title = AboutTitle::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$about_title->image)){
                unlink(self::$about_title->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$about_title->image;
        }
        self::saveBasicInfo(self::$about_title, $request, self::$imageUrl);
        self::$about_title->update();
    }
    public static function deleteAboutTitle($id)
    {
        self::$about_title = AboutTitle::find($id);
        if (file_exists(self::$about_title->image))
        {
            unlink(self::$about_title->image);
        }
        self::$about_title->delete();
    }

    private static function saveBasicInfo($about_title, $request, $imageUrl)
    {
        self::$about_title->image                   = $imageUrl;
        self::$about_title->heading                 = $request->heading;
        self::$about_title->name                    = $request->name;
        self::$about_title->description             = $request->description;
    }

}
