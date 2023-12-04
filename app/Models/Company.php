<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    private static $company, $companies, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/company/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createCompany($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$company                          = new Company();
        self::saveBasicInfo(new Company(), $request, self::$imageUrl);
        self::$company->save();
    }

    public static function updateCompany($request, $id)
    {
        self::$company = Company::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$company->image)){
                unlink(self::$company->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$company->image;
        }
        self::saveBasicInfo(self::$company, $request, self::$imageUrl);
        self::$company->update();
    }
    public static function deleteCompany($id)
    {
        self::$company = Company::find($id);
        if (file_exists(self::$company->image))
        {
            unlink(self::$company->image);
        }
        self::$company->delete();
    }

    private static function saveBasicInfo($company, $request, $imageUrl)
    {
        self::$company->image                   = $imageUrl;
        self::$company->heading                 = $request->heading;
        self::$company->name                    = $request->name;
        self::$company->description             = $request->description;
    }

}
