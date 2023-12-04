<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    private static $client, $clients;

    public static function createClient($request)
    {
        self::$client                          = new Client();
        self::saveBasicInfo(new Client(), $request);
        self::$client->save();
    }

    public static function updateClient($request, $id)
    {
        self::$client = Client::find($id);
        self::saveBasicInfo(self::$client, $request);
        self::$client->update();
    }
    public static function deleteClient($id)
    {
        self::$client = Client::find($id);
        self::$client->delete();
    }

    private static function saveBasicInfo($client, $request)
    {
        self::$client->heading                 = $request->heading;
        self::$client->name                    = $request->name;
    }

}
