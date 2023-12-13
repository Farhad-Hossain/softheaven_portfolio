<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Auth;

class GeneralSettingController extends Controller
{
    public function generalSetting(Request $request)
    {
        $method = $request->method();
        $gs = GeneralSetting::first();
        if ( $method == 'GET' ) {
            return view('pages.admin.general_setting', compact('gs'));
        } else if ( $method == 'POST' ) {

            try {
                $gs = GeneralSetting::first();
                $gs = $gs ?? new GeneralSetting();

                $gs->hotline_no = $request->hotline_no;
                $gs->title_message = $request->title_message;
                $gs->sub_title_message = $request->sub_title_message;
                $gs->promo_video_link = $request->promo_video_link;
                $gs->trusted_clients_count = $request->trusted_clients_count;
                $gs->rating = $request->rating;
                $gs->address = $request->address ?? 'demo address';
                $gs->contact_no_1 = $request->contact_no_1;
                $gs->contact_no_2 = $request->contact_no_2;
                $gs->contact_email = $request->email;
                $gs->company_link = $request->company_link;
                $gs->created_by = Auth::user()->id;
                $gs->updated_by = Auth::user()->id;

                $logoName = $gs->logo ?? '#';
                if ( $request->file('logo') ) {
                    $logoName = time().'.'.request()->logo->getClientOriginalExtension();
                    request()->logo->move(public_path('uploaded_images'), $logoName);
                }
                $gs->logo = $logoName;
                $gs->save();

                return redirect()->back()->with('success', 'Information updated successfully.');
            } catch( \Exception $e ) {
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        } else {
            return back()->with('Bad Request');
        }
    }
}
