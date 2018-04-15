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
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach( $organizations as $organization )
                            <tr>
                                <td>
                                    {{ $organization->organization_name }}
                                </td>
                                <td>
                                    {{ $organization->address }}
                                </td>
                                <td>
                                    {{ $organization->city }}
                                </td>
                                <td>
                                    {{ $organization->state }}
                                </td>
                                <td>
                                    {{ $organization->zip }}
                                </td>
                                <td>
                                    {{ $organization->status? "Active" : "Inactive" }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
