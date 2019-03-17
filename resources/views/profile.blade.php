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
                                    <a class="vendor-link" href="/salon">Salon</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="/hotel_services">Hotel Services</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="photography">Photography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="videography">Videography</a>
                            </li>
                            <br>
                            <br>
  
                            <li class="vendor_set">
                                    <a class="vendor-link" href="wedding_deco">Wedding Deco</a>
                            </li>
                            <br>
                            <br>
                           </div>
                        </div>
                  </div>
          </div>
 


<h1>Profile</h1>

@endsection