<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\TeamMember;
use App\Models\GeneralSetting;
use DB;

class FrontendController extends Controller
{
    public function welcome(Request $request)
    {
        $teamMembers = TeamMember::all();
        $gs = GeneralSetting::first();
        return view('welcome', compact(
            'teamMembers',
            'gs'
        ));
    }
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
