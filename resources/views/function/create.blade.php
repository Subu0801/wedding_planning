{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'vendor.store']) !!}
            <input type="text" class="form-control" placeholder="Vendor Name" name="name" required>
            <br>
            <input type="text" class="form-control" placeholder="Vendor Type" name="type" required>
            <br>
            <input type="text" class="form-control" placeholder="E-mail" name="email" required>
            <br>
            <textarea class="form-control" placeholder="Vendor Address" name="address" rows="10" required></textarea>
            <br>
            <textarea class="form-control" placeholder="Basic Infor" name="basicinfor" rows="20" required></textarea>
            <br>
            <input type="text" class="form-control" placeholder="Mobile No" name="mobile" required>
            <br>
            <input type="text" class="form-control" placeholder="Land No" name="land" required>
            <br>
            <input type="submit" class="form-control btn btn-info" value="CLICK HERE">
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection


