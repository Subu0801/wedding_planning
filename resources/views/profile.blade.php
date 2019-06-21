@extends('layouts.app')

{{--  include content  --}}
@section('content')

<div class="container">
    <div class="row">
        {{--  side bar part  --}}
        <div class="col-sm-3">
  
                <div class="card-deck">
                        <div class="card">
                          <img src="{{asset('images/profile/fiveth.JPG') }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Finde Your Vendor catagory.</h5>
                            
                            <li class="vendor_set">
                                    <a class="vendor-link" href="<?php echo url('/') ?>/vendor/salon">Salon</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="<?php echo url('/') ?>/vendor/hotel_services">Hotel Services</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="<?php echo url('/') ?>/vendor/photography">Photography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="<?php echo url('/') ?>/vendor/videography">Videography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="<?php echo url('/') ?>/vendor/wedding_deco">Wedding Deco</a>
                            </li>
                            <br>
                            <br>
                           </div>
                        </div>
                  </div>
          </div>
          <div class="col-sm-4">
                <h1>Profile</h1>
                Name : {{$profile->name}}
                <br>
                Mobile_Number : {{$profile->mobile_no}}
                <br>
                Land_Number : {{$profile->land_no}}
                <br>
                Email : {{$profile->email}}
                <br>
                {{--  Password : {{$profile->password}}
                <br>  --}}
          </div>
          <div class="col-sm-5">
                @if(session()->has('message'))
                <div class="alert alert-success">
                        {{ session()->get('message') }}
                </div>
                @endif
                <form action="/updateUser" method="" >
                        <input type="hidden" name="id" value="{{$profile->id}}"/>
                       
                        Name : <input type="text" name="name" id="name" placeholder=""/> 
                        <br>
                        <br>
                        <br>
                        {{-- User Type : <input type="text" name="usertype" id="usertype" placeholder=""/>
                        <br>
                        <br>
                        <br> --}}
                        Mobile Number : <input type="text" name="mobile" id="mobile" placeholder=""/>
                        <br>
                        <br>
                        <br>
                        Password : <input type="password" name="password" id="password" placeholder=""/> 
                        <br>
                        <br>
                        <br>
                        Land Number : <input type="text" name="land" id="land" placeholder=""/>
                        <br>
                        <br>
                        <br>
                        email : <input type="text" name="email" id="email" placeholder=""/>
                        <button type="submit">Update User</button>
                        
                        
                </form>

                <br>
                        <br>
                        <br>

                <form action="/uplodimg" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        Profile Image : <input type="file" name="image" class="form-control">

                        <br>
                        <br>
                        <br>
                        <button type="submit">Store Image</button>
                        
                </form>       
                        
          </div>
          
 



@endsection