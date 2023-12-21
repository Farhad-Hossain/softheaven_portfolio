<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthGroup;
use DB;

class PermissionController extends Controller
{
    public function authGroups(Request $request)
    {
        $authGroups = AuthGroup::all();
        return view('admin.auth_groups', compact('authGroups'));
    }


    public function createAuthGroup(Request $request)
    {
        try {
            DB::beginTransaction();
            $authGroup = new AuthGroup();
            $authGroup->name = $request->name;
            $authGroup->slug = str_replace(' ', '_',  strtolower( trim($request->slug) ) );

            $authGroup->save();
            DB::commit();
            return back()->withSuccess('Group Created Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors([$e->getMessage()])->withInput();
        }
    }
}
