@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Create a League</h4>

                @include( 'layouts.error_bag' )

                <p class="text-muted m-b-30 font-14">A League consists of commissioners & divisions for teams to play in.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url( 'leagues' ) }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                        <input name="name" type="text" class="form-control" placeholder="Leagues full name" value="{{ old( 'name' ) }}">
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
