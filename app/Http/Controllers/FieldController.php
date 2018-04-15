<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FieldLocation;

class FieldController extends Controller
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
        $field_locations = FieldLocation::all( );

        return view('field.index', compact( 'field_locations' ) );
    }

    public function create()
    {
        return view('field.create' );
    }
}
