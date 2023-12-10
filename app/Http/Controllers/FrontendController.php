<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use DB;

class FrontendController extends Controller
{
    public function saveContact(Request $request)
    {
        // START:: Validation
        // END:: Validation
        try {
            DB::beginTransaction();
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_no = $request->phone;
            $contact->message = $request->message;
            $contact->ip_address = $request->ip();

            $contact->save();
            DB::commit();

            return back();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return back();
        }
    }
}
