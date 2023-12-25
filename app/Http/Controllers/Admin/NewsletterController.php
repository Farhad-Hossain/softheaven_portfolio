<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function getNewsletters(Request $request)
    {
        return view('admin.newsletters', [
            'newsletters' => Newsletter::orderBy('id','desc')->get(),
        ]);
    }
}
