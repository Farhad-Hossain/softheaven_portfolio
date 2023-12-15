<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientCompany;
use Illuminate\Http\Request;

class ClientsListController extends Controller
{
    public function getClientsList(Request $r)
    {
        $method = $r->method();
        if ( $method == 'GET' ) {
            $clients = ClientCompany::all();
            return view('pages.admin.clients_list', compact('clients'));
        } else if ( $method == 'POST' ) {
            $client = new ClientCompany();

            try {
                $client->name = $r->name;
                $client->link = $r->link;
                $client->logo_link = $r->logoName;


                $client->save();
                return redirect()->back()->with('success', 'Company Added successfully');
            } catch (\Exception $e) {
                dd($e);
            }
        }
    }
}
