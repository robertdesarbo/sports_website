@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title">Search Locations</h4>

                @include( 'layouts.error_bag' )

                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $field_locations as $field_location )
                            <tr>
                                <td>
                                    {{ $field_location->name }}
                                </td>
                                <td>
                                    {{ $field_location->address }}
                                </td>
                                <td>
                                    {{ $field_location->city }}
                                </td>
                                <td>
                                    {{ $field_location->state }}
                                </td>
                                <td>
                                    {{ $field_location->zip }}
                                </td>
                                <td>
                                    {{ $field_location->status? "Active" : "Inactive" }}
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
