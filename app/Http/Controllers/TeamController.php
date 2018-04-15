<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\League;
use App\Division;

use Auth;
use Redirect;
use Config;

class TeamController extends Controller
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
        $teams = Team::all( );

        return view('team.index', compact( 'teams' ) );
    }

    public function create()
    {
        $leagues   = League::all( );
        $divisions = Division::all( );

        return view('team.create', compact( 'leagues', 'divisions' ) );
    }

    public function store( Request $request )
    {
        $request->validate(
        [
            'name'     => 'required',
            'division' => 'required|exists:divisions,id'
        ]);

        $team = new Team( );

        #Team
        $team->team_name   = $request->name;
        $team->division_id = $request->division;
        $team->status      = true;
        $team->save( );

        $request->session()->flash('status', $request->name.' was successfully created!');
        return Redirect::back();

    }
}
