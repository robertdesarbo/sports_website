@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Search your Organizations Leagues</h4>

                @include( 'layouts.error_bag' )

                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $leagues as $league )
                            <tr>
                                <td>
                                    {{ $league->league_name }}
                                </td>
                                <td>
                                    {{ $league->status? "Active" : "Inactive" }}
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
