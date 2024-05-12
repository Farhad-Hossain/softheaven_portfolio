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
        try{    
            $slider = new Slider();
            $slider->title = $request->title;
            $slider->title_short_description = $request->short_description;
            $slider->first_button_text = $request->first_btn_text;
            $slider->first_button_link = $request->first_btn_link;
            $slider->second_button_text = $request->second_btn_text;
            $slider->second_button_link = $request->second_btn_link; 
            $slider->is_active = $request->is_active;
            if ( $request->hasFile('photo') ) {
                $imageName = time().'.'.request()->photo->getClientOriginalExtension();
                request()->photo->move(public_path('uploaded_images'), $imageName);
            }
            $slider->photo = $imageName;
            $slider->save();
            return redirect()->back()->with('success', 'Slider created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
