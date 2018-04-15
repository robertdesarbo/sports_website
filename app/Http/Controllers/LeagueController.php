<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\League;
use App\LeagueCommissioner;

use Auth;
use Redirect;
use Config;

class LeagueController extends Controller
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
     * Show list of Leagues
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::all( );

        return view('league.index', compact( 'leagues' ) );
    }

    public function create()
    {
        return view('league.create' );
    }

    public function store( Request $request )
    {

        $request->validate(
        [
            'name' => 'required',
        ]);

        $league = new League( );

        #League
        $league->league_name     = $request->name;
        $league->organization_id = Auth::user()->organization->first( )->organization_id;
        $league->status          = true;
        $league->save( );

        #TEMP -- Create a league commisioner for testing
        $organization_management            = new LeagueCommissioner( );
        $organization_management->league_id = $league->id;
        $organization_management->user_id   = Auth::user()->id;
        $organization_management->status    = true;
        $organization_management->save( );

        $request->session()->flash('status', $request->name.' was successfully created!');
        return Redirect::back();

    }
}
