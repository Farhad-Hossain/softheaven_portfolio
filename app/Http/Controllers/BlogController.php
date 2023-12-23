<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogView(Request $request)
    {
        $blog = null;
        $blogs = null;
        if ( $request->slug ) {
            $blog = Blog::whereSlug($request->slug)->first();
        } else {
            $blogs = Blog::orderBy('created_at','desc')->get();
        }
        return view('pages.blogs.details', compact('blogs', 'blog'));
    }
}
