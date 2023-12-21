<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use DB;
use Auth;

class TeamController extends Controller
{
    public function teamMembers(Request $requet)
    {
        $teamMembers = TeamMember::all();
        return view('pages.admin.team_members', compact('teamMembers'));
    }

    public function addTeamMember(Request $request)
    {
        DB::beginTransaction();
        try {
            $member = new TeamMember();
            $member->name = $request->name;
            $member->designation = $request->designation;
            $member->facebook = $request->facebook ?? '';
            $member->x = $request->x ?? '';
            $member->linkedin = $request->linkedin ?? '';

            $imageName = '-';

            if ( $request->hasFile('photo') ) {
                $imageName = time().'.'.request()->photo->getClientOriginalExtension();
                request()->photo->move(public_path('uploaded_images'), $imageName);
            }
            $member->photo_url = $imageName;
            $member->created_by = Auth::user()->id;

            $member->save();
            DB::commit();

            return back();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return back();
        }
        
    }

    public function deleteTeamMember(Request $request)
    {
        $result = [
            'success' => false,
            'message' => '',
        ];
        DB::beginTransaction();
        try {
            $member = TeamMember::find($request->id);
            $member->delete();
            DB::commit();
            $result['success'] = true;
            $result['message'] = 'Team member deleted successfully';
            return response()->json($result);
        } catch (\Exception $e) {
            DB::rollback();
            $result['message'] = 'Something went wrong';
            return back();
        }
    }
}
