<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    public function getAllTestimonials(Request $r)
    {
        $testimonials = Testimonial::where('status', true)->get();
        return view('pages.admin.testimonials', compact('testimonials'));
    }

    public function saveTestimonial(Request $r)
    {
        try {
            DB::beginTransaction();
            if ( $r->id ) {
                $test = Testimonial::find($r->id);
            } else {
                $test = new Testimonial();
            }

            $test->name = $r->name;
            $test->designation = $r->designation;
            $test->organization = $r->organization;
            $test->message = $r->message;

            $avatarName = $test ? $test->avatar : '#';
            if ( $r->avatar ) {
                $avatarName = $this->makeFileName('testimonials', $r->avatar);
                $this->storeFile( $avatarName, $r->avatar );
                
            }
            $test->avatar = $avatarName;
            $test->save();

            DB::commit();
            return redirect()->back()->with('success','Testimonial Data modifying accessfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteTestimonial(Request $r)
    {
        try {
            DB::beginTransaction();
            $test = Testimonial::find($r->id);
            $test->delete();
            DB::commit();
            return redirect()->back()->with('success','Testimonial deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
