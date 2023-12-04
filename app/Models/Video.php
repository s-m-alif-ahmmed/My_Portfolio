<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    private static $video, $videos, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/video/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createVideo($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$video                          = new Video();
        self::saveBasicInfo(new Video(), $request, self::$imageUrl);
        self::$video->save();
    }

    public static function updateVideo($request, $id)
    {
        self::$video = Video::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$video->image)){
                unlink(self::$video->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$video->image;
        }
        self::saveBasicInfo(self::$video, $request, self::$imageUrl);
        self::$video->update();
    }
    public static function deleteVideo($id)
    {
        self::$video = Video::find($id);
        if (file_exists(self::$video->image))
        {
            unlink(self::$video->image);
        }
        self::$video->delete();
    }

    private static function saveBasicInfo($video, $request, $imageUrl)
    {
        self::$video->image                   = $imageUrl;
        self::$video->link                    = $request->link;
        self::$video->name                    = $request->name;
        self::$video->description             = $request->description;
    }

}
