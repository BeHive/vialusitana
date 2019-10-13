<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Pagina;

class PagesController extends Controller
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
    public function index($pageSlug)
    {

        $page = Pagina::where('slug', $pageSlug)->first();
        if(!$page){
            abort(404);
        }

        return view('page', [
            'page' => $page
        ]);
    }
}
