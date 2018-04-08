@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Create an Organization</h4>

                <p class="text-muted m-b-30 font-14">Organizations have the power to create Leagues, Teams, Scheduling & Locations.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url( 'organizations' ) }}">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                        <input name="name" type="text" class="form-control" placeholder="organizations full name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Address</label>
                                    <div class="col-10">
                                        <input name="address" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">City</label>
                                    <div class="col-10">
                                        <input name="city" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">State</label>
                                    <div class="col-10">
                                        <input name="state" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Zip</label>
                                    <div class="col-10">
                                        <input name="zip" type="text" class="form-control" placeholder="">
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
