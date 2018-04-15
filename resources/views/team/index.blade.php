@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Search an Organization</h4>

                @include( 'layouts.error_bag' )

                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>League</th>
                        <th>Division</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $teams as $team )
                            <tr>
                                <td>
                                    {{ $team->team_name }}
                                </td>
                                <td>
                                    {{ $team->division->league->league_name }}
                                </td>
                                <td>
                                    {{ $team->division->division_name }}
                                </td>
                                <td>
                                    {{ $team->status? "Active" : "Inactive" }}
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
