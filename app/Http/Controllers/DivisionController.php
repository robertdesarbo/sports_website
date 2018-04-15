<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Division;
use App\League;

use Auth;
use Redirect;
use Config;

class DivisionController extends Controller
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
     * Show list of Organizations
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all( );

        return view('division.index', compact( 'divisions' ) );
    }

    public function create()
    {
        $leagues = League::all( );

        return view('division.create', compact( 'leagues' ) );
    }

    public function store( Request $request )
    {
        $request->validate(
        [
            'name'   => 'required',
            'cost'   => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'league' => 'required|exists:leagues,id'
        ]);

        $division = new Division( );

        #Organaztion
        $division->division_name = $request->name;
        $division->division_cost = $request->cost;
        $division->league_id     = $request->league;
        $division->status        = true;
        $division->save( );

        $request->session()->flash('status', $request->name.' was successfully created!');
        return Redirect::back();

    }
}
