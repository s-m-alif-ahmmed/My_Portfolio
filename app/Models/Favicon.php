<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favicon extends Model
{
    use HasFactory;

    private static $favicon, $favicons, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/favicon/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createFavicon($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$favicon                          = new Favicon();
        self::saveBasicInfo(new Favicon(), $request, self::$imageUrl);
        self::$favicon->save();
    }

    public static function updateFavicon($request, $id)
    {
        self::$favicon = Favicon::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$favicon->image)){
                unlink(self::$favicon->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$favicon->image;
        }
        self::saveBasicInfo(self::$favicon, $request, self::$imageUrl);
        self::$favicon->update();

    }
    public static function deleteFavicon($id)
    {
        self::$favicon = Favicon::find($id);
        if (file_exists(self::$favicon->image))
        {
            unlink(self::$favicon->image);
        }
        self::$favicon->delete();
    }

    private static function saveBasicInfo($favicon, $request, $imageUrl)
    {
        self::$favicon->image                    = $request->image;
        self::$favicon->title                    = $request->title;

    }

}
