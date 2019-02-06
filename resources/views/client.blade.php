@extends('layouts.app')

{{--  include content  --}}
@section('content')
 


<h1>Clients</h1>
@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@endsection