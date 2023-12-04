<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    private static $home, $homes, $home_profile_photo, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$home_profile_photo = $request->file('home_profile_photo');
        self::$imageName = self::$home_profile_photo->getClientOriginalName();
        self::$directory = "admin/images/home/";
        self::$home_profile_photo->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createHome($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$home                             = new Home();
        self::$home->full_name                       = $request->full_name;
        self::$home->home_profile_photo         = self::$imageUrl;
        self::$home->save();
    }

    public static function updateHome($request, $id)
    {
        self::$home = Home::find($id);
        if($request->file('home_profile_photo'))
        {
            if(file_exists(self::$home->home_profile_photo)){
                unlink(self::$home->home_profile_photo);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$home->home_profile_photo;
        }
        self::$home->full_name                   = $request->full_name;
        self::$home->home_profile_photo     = self::$imageUrl;
        self::$home->update();

    }
    public static function deleteHome($id)
    {
        self::$home = Home::find($id);
        if (file_exists(self::$home->home_profile_photo))
        {
            unlink(self::$home->home_profile_photo);
        }
        self::$home->delete();
    }

}
