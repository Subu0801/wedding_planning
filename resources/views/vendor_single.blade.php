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
          <div class="col-sm-9">
                <h1>Profile</h1>
                Name : {{$vendor->name}}
        
          </div>
        
          
 



@endsection