<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\TeamMember;
use App\Models\GeneralSetting;
use App\Models\ClientCompany;
use App\Models\Blog;
use DB;

class FrontendController extends Controller
{
    public function welcome(Request $request)
    {
        $teamMembers = TeamMember::all();
        $gs = GeneralSetting::first();
        $clients = ClientCompany::all();
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::where('status', 1)->get();
        return view('welcome', compact(
            'teamMembers',
            'gs',
            'clients',
            'blogs',
            'testimonials'
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

    public function createNewsletter(Request $request)
    {
        $n = Newsletter::where('email', $request->email)->first();
        if ( $n == null ) {
            $n = new Newsletter();
        }
        $n->email = $request->email;
        $n->ip_address = $request->ip();
        $n->save();
        return response()->json([
            'status' => 'success',
            'message'=> 'Thank you for connecting with us.'
        ]);
    }
}
