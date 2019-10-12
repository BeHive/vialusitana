<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use \Auth;

class CharacterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $characters = Character::where('user_id', Auth::user()->id)->get();

        return view('character', [
            'characters' => $characters
        ]);
    }

    public function create()
    {
        $characters = Character::where('user_id', Auth::user()->id)->get();

        return view('character', [
            'characters' => $characters
        ]);
    }

    public function edit($id)
    {
        $characters = Character::where('id', $id)->get();

        return view('character', [
            'characters' => $characters
        ]);
    }

    public function save($id)
    {
        $characters = Character::where('id', $id)->get();

        return view('character', [
            'characters' => $characters
        ]);
    }
}
