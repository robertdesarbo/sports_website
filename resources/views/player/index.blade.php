@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Search Players on at least ONE team</h4>

                @include( 'layouts.error_bag' )

                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $players as $player )
                            <tr>
                                <td>
                                    {{ $player->name }}
                                </td>
                                <td>
                                    {{ $player->status? "Active" : "Inactive" }}
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
