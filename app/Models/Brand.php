<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $brands, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/brand/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createBrand($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$brand                          = new Brand();
        self::saveBasicInfo(new Brand(), $request, self::$imageUrl);
        self::$brand->save();
    }

    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$brand->image;
        }
        self::saveBasicInfo(self::$brand, $request, self::$imageUrl);
        self::$brand->update();
    }
    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

    private static function saveBasicInfo($brand, $request, $imageUrl)
    {
        self::$brand->image                   = $imageUrl;
    }


}
