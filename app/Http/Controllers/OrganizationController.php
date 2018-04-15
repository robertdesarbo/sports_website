<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organization;
use App\OrganizationManagement;

use Auth;
use Redirect;
use Config;

class OrganizationController extends Controller
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
        $organizations = Organization::all( );

        return view('organization.index', compact( 'organizations' ) );
    }

    public function create()
    {
        return view('organization.create' );
    }

    public function store( Request $request )
    {
        $request->validate(
        [
            'name'    => 'required',
            'address' => 'required',
            'city'    => 'required',
            'state'   => 'required|in:'.implode( ",", array_keys( Config::get('constants.states') ) ),
            'zip'     => 'required|regex:/\b\d{5}\b/',
        ]);

        $organization = new Organization( );

        #Organaztion
        $organization->organization_name = $request->name;
        $organization->address           = $request->address;
        $organization->city              = $request->city;
        $organization->state             = $request->state;
        $organization->zip               = $request->zip;
        $organization->status            = true;
        $organization->save( );

        #TEMP -- Create a Organizational manager for testing
        $organization_management                  = new OrganizationManagement( );
        $organization_management->organization_id = $organization->id;
        $organization_management->user_id         = Auth::user()->id;
        $organization_management->status          = true;
        $organization_management->save( );

        $request->session()->flash('status', $request->name.' was successfully created!');
        return Redirect::back();

    }
}
