@extends('layouts.app')

@section('content')

<h1>Home</h1> 
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut magnam nemo dicta repellendus quibusdam deserunt vitae animi a unde non cumque fugit consectetur laudantium aliquam, nesciunt? Veniam qui hic perferendis.</p>
@endsection


@section('sidebar')
   @parent
    <p>This is appended to the sidebar</p>

@endsection