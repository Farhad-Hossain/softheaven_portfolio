<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Auth;

class ServiceController extends Controller
{
    public function getServiceList(Request $request)
    {
        return view('pages.admin.service_list', [
            'services' => Service::whereNotNull('title')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function saveService(Request $request)
    {
        // For showinf edit/create form
        if ( $request->isMethod('GET') ) {
            $service = Service::firstWhere('id', $request->service_id);
            return view('pages.admin.service.form', ['service'=>$service]);
        }

        // For saving of creating / editing
        if ( $request->service_id ) {
            $service = Service::findOrFail($request->service_id);
        } else {
            $service = new Service();
        }

        
        $service->title = $request->title;
        $service->description = $request->description;
        $service->active_status = $request->active_status;
        $service->created_by = Auth::user()->id;
        $service->save();
        return redirect()->back()->with('success', 'Service Information saved');
    }

    public function deleteService(Request $request)
    {
        $service = Service::findOrFail($request->service_id);
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}
