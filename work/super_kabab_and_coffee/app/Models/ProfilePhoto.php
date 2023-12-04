<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProfilePhoto extends Model
{
    use HasFactory;

    private static $user, $users, $photo, $directory, $photoName, $photoUrl;

    public static function uploadPhoto($request)
    {
        self::$photo = $request->file('photo');
        self::$photoName = self::$photo->getClientOriginalName();
        self::$directory = "admin/images/profile_photo/";
        self::$photo->move(self::$directory, self::$photoName);
        self::$photoUrl = self::$directory.self::$photoName;
        return self::$directory.self::$photoName;
    }

    public static function updateProfilePhoto($request, $id)
    {
        self::$user = User::find($id);
        if($request->file('photo'))
        {
            if(file_exists(self::$user->photo)){
                unlink(self::$user->photo);
            }
            self::$photoUrl = self::uploadPhoto($request);
        }
        else{
            self::$photoUrl = self::$user->photo;
        }
        self::$user->photo = self::$photoUrl;
        self::$user->update();

    }

    public static function deleteProfilePhoto($id)
    {
        self::$user = User::find($id);
        if (file_exists(self::$user->photo)) {
            unlink(self::$user->photo);
        }
        self::$user->update(['photo' => null]);
    }

}
