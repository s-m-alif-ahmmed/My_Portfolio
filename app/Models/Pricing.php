<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    private static $pricing, $pricings;

    public static function createPricing($request)
    {
        self::$pricing              = new Pricing();
        self::saveBasicInfo(new Pricing(), $request);
        self::$pricing->save();
    }

    public static function updatePricing($request, $id)
    {
        self::$pricing = Pricing::find($id);
        self::saveBasicInfo(self::$pricing, $request);
        self::$pricing->update();
    }
    public static function deletePricing($id)
    {
        self::$pricing = Pricing::find($id);
        self::$pricing->delete();
    }

    private static function saveBasicInfo($pricing, $request)
    {
        self::$pricing->name                      = $request->name;
        self::$pricing->description               = $request->description;
        self::$pricing->symble                    = $request->symble;
        self::$pricing->amount                    = $request->amount;
        self::$pricing->month                     = $request->month;
        self::$pricing->button                    = $request->button;
    }

}
