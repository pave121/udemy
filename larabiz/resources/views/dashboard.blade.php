@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <span class="pull-right">
                        <a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a>
                    </span>
                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($user->listings) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($user->listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection