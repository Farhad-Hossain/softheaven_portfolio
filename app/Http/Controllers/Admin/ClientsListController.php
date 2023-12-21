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
        }
    }

    public function addClientCompany(Request $r)
    {
        $logoName = '';
        $client = new ClientCompany();
        try {
            $client->name = $r->name;
            $client->link = $r->link;

            if ( $r->logo_link ) {
                $logoName = $this->makeFileName('client_logos', $r->file('logo_link'));
                $this->storeFile($logoName, $r->file('logo_link'));
                $client->logo_link = $logoName;
            }
            $client->save();
            return redirect()->back()->with('success', 'Company Added successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
