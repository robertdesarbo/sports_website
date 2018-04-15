@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Create a Location</h4>

                @include( 'layouts.error_bag' )

                <p class="text-muted m-b-30 font-14">Field locations consistet of one or many fields.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url( 'fields' ) }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                        <input name="name" type="text" class="form-control" placeholder="Location name" value="{{ old( 'name' ) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Address</label>
                                    <div class="col-10">
                                        <input name="address" type="text" class="form-control" placeholder="" value="{{ old( 'address' ) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">City</label>
                                    <div class="col-10">
                                        <input name="city" type="text" class="form-control" placeholder="" value="{{ old( 'city' ) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">State</label>
                                    <div class="col-10">
                                        <select class="form-control" name="state">
                                            <option></option>
                                            @foreach( Config::get('constants.states') as $abr_state => $full_state )
                                                <option value="{{ $abr_state }}" {{ old( 'state' ) == $abr_state ? "selected" : "" }}> {{ $full_state }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Zip</label>
                                    <div class="col-10">
                                        <input name="zip" type="text" class="form-control" placeholder="" value="{{ old( 'zip' ) }}">
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
