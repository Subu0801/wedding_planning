@extends('layouts.app')

{{--  include content  --}}
@section('content')
 


<h1>Profile</h1>
<h3>{{$user->name}}</h3> 
<h3>{{$user->age}}</h3>

@endsection