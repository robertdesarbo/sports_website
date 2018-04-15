@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Create a Team</h4>

                @include( 'layouts.error_bag' )

                <p class="text-muted m-b-30 font-14">Teams belong to one League and consist of Players.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url( 'teams' ) }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                        <input name="name" type="text" class="form-control" placeholder="Teams full name" value="{{ old( 'name' ) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">League</label>
                                    <div class="col-10">
                                        <select class="form-control" name="league">
                                            <option></option>
                                            @foreach( $leagues as $league_id => $league )
                                                <option value="{{ $league->id }}" {{ old( 'league' ) == $league->id ? "selected" : "" }}> {{ $league->league_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Division</label>
                                    <div class="col-10">
                                        <select class="form-control" name="division">
                                            <option></option>
                                            @foreach( $divisions as $division_id => $division )
                                                <option value="{{ $division->id }}" {{ old( 'division' ) == $division->id ? "selected" : "" }}> {{ $division->division_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
