@extends('layouts.app')
{{--  include content  --}}
@section('content')

<div class="container">
    <div class="row">
        {{--  side bar part  --}}
        <div class="col-sm-3">
                <form action="{{ route('posts.post') }}" method="POST">

                                {{ csrf_field() }}
                                {{-- {{dd($vendor->averageRating)}} --}}
                        <div class="rating">
                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $vendor->userAverageRating }}" data-size="xs">

                                <input type="hidden" name="id" required="" value="{{ $vendor->id }}">

                               
                                <br/>
                                @can('user',auth()->user())
                                <button class="btn btn-success">Submit Review</button>
                                @endcan
                        </div>
                </form>
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
                <h1>Hi Welcome Our Company</h1>
                <br>
                <br>
                <h3> we are help of your dream wedding</h3>
                <br>
                <br>
                Name : {{$vendor->name}}
                <br>
                <br>
                Compny Name : {{$vendor->companyName}}
                
                <a href="/events/{{$vendor->userId}}" target="_blank" class="btn btn-success">View Events Dates</a>
                
                    </div>
                    
          </div>
        
          
 



@endsection

