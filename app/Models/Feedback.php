<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    private static $feedback, $feedbacks, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/feedback/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createFeedback($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$feedback                          = new Feedback();
        self::saveBasicInfo(new Feedback(), $request, self::$imageUrl);
        self::$feedback->save();
    }

    public static function updateFeedback($request, $id)
    {
        self::$feedback = Feedback::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$feedback->image)){
                unlink(self::$feedback->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$feedback->image;
        }
        self::saveBasicInfo(self::$feedback, $request, self::$imageUrl);
        self::$feedback->update();
    }
    public static function deleteFeedback($id)
    {
        self::$feedback = Feedback::find($id);
        if (file_exists(self::$feedback->image))
        {
            unlink(self::$feedback->image);
        }
        self::$feedback->delete();
    }

    private static function saveBasicInfo($feedback, $request, $imageUrl)
    {
        self::$feedback->image                   = $imageUrl;
        self::$feedback->feedback                = $request->feedback;
        self::$feedback->client_name             = $request->client_name;
        self::$feedback->position                = $request->position;
    }


}
