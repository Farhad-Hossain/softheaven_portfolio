<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();
        return view("pages.admin.blog.index", compact("blogs"));
    }
    public function create (Request $request) 
    {
        $blog = null;
        if ($request->has("slug")) {
            $blog = Blog::whereSlug($request->slug)->first();
        }
        return view('pages.admin.blog.create', compact('blog'));
    }
    public function store (Request $request)
    {
        if ( $request->blog_id ) {
            $blog = Blog::find($request->blog_id);    
        } else {
           $blog = new Blog();
        }
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->content = $request->content;
        $blog->publication_date = $request->publication_date;
        $blog->published_status = $request->published_status ?? 0;

        if ( $request->file('thumbnail') ){
            $fileName = $this->makeFileName('blogs', $request->file('thumbnail'));
            $this->storeFile($fileName, $request->file('thumbnail'));
            $blog->thumbnail = $fileName;
        }
        $blog->save();
        return redirect()->back()->with('success','Blog content saved succesfully');
    }
    public function delete (Request $request)
    {
        try {
            $blog = Blog::find($request->blog_id);
            $blog->delete();
            return redirect()->back()->with('success','Blog Deleted Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
