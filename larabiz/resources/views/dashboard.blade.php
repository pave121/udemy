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
                                    <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                        </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
