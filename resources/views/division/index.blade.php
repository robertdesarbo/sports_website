@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Search Divisions</h4>

                @include( 'layouts.error_bag' )

                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>League</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $divisions as $division )
                            <tr>
                                <td>
                                    {{ $division->division_name }}
                                </td>
                                <td>
                                    {{ $division->division_cost }}
                                </td>
                                <td>
                                    {{ $division->league->league_name }}
                                </td>
                                <td>
                                    {{ $division->status? "Active" : "Inactive" }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $(function()
        {
            $( '.table' ).DataTable(
                {
                    'lengthChange': false
                }
            );
        });
    </script>
@endsection
