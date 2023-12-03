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
            if ( Auth::user()->is_super_admin ) {
                $this->redirectTo = 'admin.index';
            }
            return $next($request);
        });
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
