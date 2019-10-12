<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use \Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
dd("sopa");
        $sessions = Session::orderBy('real_date', 'desc')->paginate(10);

        return view('home', [
            'sessions' => $sessions
        ]);
    }
}
