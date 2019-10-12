<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \Auth;

class PartyController extends Controller
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
        $player = User::where('id', Auth::user()->id)->get();
        $partyMembers = User::orderBy('id', 'asc')->paginate(10);

        $filteredPartyMembers = $partyMembers->reject(function ($member, $key) {
            //return $member->id == Auth::user()->id;
        });

        return view('party', [
            'player' => $player,
            'partyMembers' => $filteredPartyMembers
        ]);
    }
}
