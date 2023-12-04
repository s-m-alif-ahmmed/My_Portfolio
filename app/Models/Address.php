<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    private static $address, $addresss;

    public static function createAddress($request)
    {
        self::$address                          = new Address();
        self::saveBasicInfo(new Address(), $request);
        self::$address->save();
    }

    public static function updateAddress($request, $id)
    {
        self::$address = Address::find($id);
        self::saveBasicInfo(self::$address, $request);
        self::$address->update();
    }
    public static function deleteAddress($id)
    {
        self::$address = Address::find($id);
        self::$address->delete();
    }

    private static function saveBasicInfo($address, $request)
    {
        self::$address->number                = $request->number;
        self::$address->email                 = $request->email;
        self::$address->support_email         = $request->support_email;
        self::$address->address               = $request->address;
        self::$address->map                   = $request->map;
    }


}
