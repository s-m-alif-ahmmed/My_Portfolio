<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    private static $project, $projects, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "admin/images/project/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function createProject($request)
    {
        self::$imageUrl                         = self::uploadImage($request);
        self::$project                          = new Project();
        self::saveBasicInfo(new Project(), $request, self::$imageUrl);
        self::$project->save();
    }

    public static function updateProject($request, $id)
    {
        self::$project = Project::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$project->image)){
                unlink(self::$project->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$project->image;
        }
        self::saveBasicInfo(self::$project, $request, self::$imageUrl);
        self::$project->update();
    }
    public static function deleteProject($id)
    {
        self::$project = Project::find($id);
        if (file_exists(self::$project->image))
        {
            unlink(self::$project->image);
        }
        self::$project->delete();
    }

    private static function saveBasicInfo($project, $request, $imageUrl)
    {
        self::$project->category_id             = $request->category_id;
        self::$project->image                   = $imageUrl;
        self::$project->name                    = $request->name;
        self::$project->description             = $request->description;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
