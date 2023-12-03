<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthGroup;

class PermissionController extends Controller
{
    public function authGroups(Request $request)
    {
        $authGroups = AuthGroup::all();
        return view('admin.auth_groups');
    }
}
