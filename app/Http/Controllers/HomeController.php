<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Symfony\Component\Process\Process;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;

class HomeController extends Controller
{
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
            dd($result);
        }
        if ( $request->exec ) {
            echo shell_exec('(cd '. base_path() .' && composer '.$request->exec.')');
        }
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
