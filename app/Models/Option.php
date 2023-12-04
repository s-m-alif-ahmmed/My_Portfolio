<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    private static $option, $options;

    public static function createDetail($request)
    {
        self::$option              = new Option();
        self::saveBasicInfo(new Option(), $request);
        self::$option->save();
    }

    public static function updateDetail($request, $id)
    {
        self::$option = Option::find($id);
        self::saveBasicInfo(self::$option, $request);
        self::$option->update();
    }
    public static function deleteDetail($id)
    {
        self::$option = Option::find($id);
        self::$option->delete();
    }

    private static function saveBasicInfo($option, $request)
    {
        self::$option->pricing_id                 = $request->pricing_id;
        self::$option->option_name                = $request->option_name;
    }

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }

}
