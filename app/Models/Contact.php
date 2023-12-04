<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'number', 'subject', 'message'];

    private static $contact, $contacts;

    public static function createContact($request)
    {
        self::$contact            = new Contact();
        self::saveBasicInfo(new Contact(), $request);
        self::$contact->save();
    }

    public static function deleteContact($id)
    {
        self::$contact = Contact::find($id);
        self::$contact->delete();
    }

    private static function saveBasicInfo($contact, $request)
    {
        self::$contact->name                    = $request->name;
        self::$contact->email                   = $request->email;
        self::$contact->number                  = $request->number;
        self::$contact->subject                 = $request->subject;
        self::$contact->message                 = $request->message;
    }

}
