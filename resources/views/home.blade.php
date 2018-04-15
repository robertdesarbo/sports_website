@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="fi-box float-right"></i>
                <h6 class="text-muted text-uppercase mb-3">Organizations</h6>
                <h4 class="mb-3" data-plugin="counterup">1,587</h4>
                <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="fi-layers float-right"></i>
                <h6 class="text-muted text-uppercase mb-3">Leagues</h6>
                <h4 class="mb-3">$<span data-plugin="counterup">46,782</span></h4>
                <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="fi-tag float-right"></i>
                <h6 class="text-muted text-uppercase mb-3">Teams</h6>
                <h4 class="mb-3">$<span data-plugin="counterup">15.9</span></h4>
                <span class="badge badge-primary"> 0% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
                <i class="fi-briefcase float-right"></i>
                <h6 class="text-muted text-uppercase mb-3">Players</h6>
                <h4 class="mb-3" data-plugin="counterup">1,890</h4>
                <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Cash Flow</h4>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center mt-3">
                            <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-3">
                            <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-3">
                            <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                            <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                        </div>
                    </div>
                </div>

                <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
            </div>
        </div>
    </div>
    <!-- end row -->


@endsection


@section('footer')
    <script src="{{ asset('/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('/assets/pages/jquery.dashboard.init.js') }}"></script>
@endsection
