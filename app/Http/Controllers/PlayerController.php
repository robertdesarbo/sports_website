<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Team;
use App\League;
use App\Division;

use Auth;
use Redirect;
use Config;

class PlayerController extends Controller
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
     * Show list of Teams
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = User::has( 'team' )->get();

        return view('player.index', compact( 'players' ) );
    }

    public function create()
    {
        $leagues   = League::all( );
        $divisions = Division::all( );
        $teams     = Team::all( );

        return view('player.create', compact( 'leagues', 'divisions', 'teams' ) );
    }

    public function store( Request $request )
    {
        $request->validate(
        [
            'name'     => 'required',
            'team' => 'required|exists:teams,id'
        ]);

        $player = new User( );

        #Team
        $team->team_name   = $request->name;
        $team->division_id = $request->division;
        $team->status      = true;
        $team->save( );

        $request->session()->flash('status', $request->name.' was successfully created!');
        return Redirect::back();

    }
}
