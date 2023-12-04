<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    private static $logo, $logos, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/logo/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createLogo($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$logo                             = new Logo();
        self::$logo->image                      = self::$imageUrl;
        self::$logo->save();
    }

    public static function updateLogo($request, $id)
    {
        self::$logo = Logo::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$logo->image)){
                unlink(self::$logo->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$logo->image;
        }
        self::$logo->image     = self::$imageUrl;
        self::$logo->update();

    }
    public static function deleteHome($id)
    {
        self::$logo = Logo::find($id);
        if (file_exists(self::$logo->image))
        {
            unlink(self::$logo->image);
        }
        self::$logo->delete();
    }
}
