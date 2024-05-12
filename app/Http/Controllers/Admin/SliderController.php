<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function getSlidersList(Request $request)
    {
        try {
            $sliders = Slider::all();
            return view('pages.admin.sliders', compact('sliders'));
        } catch (\Exception $e) {
            dd( $e->getMessage() );
        }
        
    }

    public function addSlider(Request $request)
    {
        dd( $request->all() );
    }
}
