<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function getAllTestimonials(Request $r)
    {
        $testimonials = Testimonial::where('status', true)->get();
        return view('pages.admin.testimonials', compact('testimonials'));
    }

    public function addTestimonial(Request $r)
    {

        dd($r->all());
    }
}
