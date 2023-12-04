<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $blogs, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/blog/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createBlog($request)
    {
        self::$imageUrl                      = self::uploadImage($request);
        self::$blog                          = new Blog();
        self::saveBasicInfo(new Blog(), $request, self::$imageUrl);
        self::$blog->save();
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$blog->image;
        }
        self::saveBasicInfo(self::$blog, $request, self::$imageUrl);
        self::$blog->update();
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }

    private static function saveBasicInfo($blog, $request, $imageUrl)
    {
        self::$blog->image                   = $imageUrl;
        self::$blog->name                    = $request->name;
        self::$blog->author_name             = $request->author_name;
        self::$blog->description             = $request->description;
    }

}
