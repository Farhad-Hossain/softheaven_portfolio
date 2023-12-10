<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contacts(Request $request)
    {
        $contacts = Contact::where('id', '>', 1)
            ->orderBy('id', 'desc')
            ->get();
        return view('pages.admin.contacts', compact('contacts'));
    }
}
