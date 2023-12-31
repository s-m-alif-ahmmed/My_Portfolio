<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $categories;

    public static function createCategory($request)
    {
        self::$category                          = new Category();
        self::saveBasicInfo(new Category(), $request);
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        self::saveBasicInfo(self::$category, $request);
        self::$category->update();
    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        self::$category->delete();
    }

    private static function saveBasicInfo($category, $request)
    {
        self::$category->name                    = $request->name;
    }


}
