<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashContact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'address',
        'status',
    ];

    public static function addContact($request){
        $contact = new CashContact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->status = $request->status;
        $contact->save();
    }

    public static function updateContact($request){
        $contact = CashContact::find($request->id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->status = $request->status;
        $contact->save();
    }

    public static function deleteContact($id){
        $contact = CashContact::find($id);
        $contact->delete();
    }

    public static function getAllContacts(){
        return CashContact::all();
    }

    public static function getContactById($id){
        return CashContact::find($id);
    }
}