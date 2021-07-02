@extends('master')

@section('content')

    <h1>Welcome Home</h1>
    {{ Auth::guard("admin")->user()->full_name }}

    <a href="{{route("admin.logout")}}"> logout </a>
 
@endsection