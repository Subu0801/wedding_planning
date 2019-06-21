@extends('layouts.app')

{{--  include content  --}}
@section('content')

<div class="container">
        <div class="row">
            {{--  side bar part  --}}
            <div class="col-sm-3">
    
                    <div class="card-deck">
                            <div class="card">
                              <img src="{{asset('images/profile/fourth.JPG') }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Finde Your Vendor catagory.</h5>
                                
                                <li class="vendor_set">
                                        <a class="vendor-link" href="salon">Salon</a>
                                </li>
                                <br>
                                <br>

                                <li class="vendor_set">
                                        <a class="vendor-link" href="hotel_services">Hotel Services</a>
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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
            <div class="col-sm-9">
                    <div class="row">

                        {{-- //add image tag --}}
            @foreach($groups as $group)
            @if (strtolower($type)=== strtolower($group[0]->vendor_type))
            {{--  vendor group post past  --}}
            <div class="col-sm-4">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            {{--  <div class="card-header">{{$vendor->company_name}}</div>  --}}
                            <div class="card-body">
                              <h5 class="card-title">{{$group[0]->company_name}}</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                              <h3>Are you want appoinment day</h3>
                              {{--  <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>--}}
                              <a class="" href="/vendor/{{$group[0]->vendor_type}}/{{$group[0]->user_id}}" text="black">View Service</a> 
                              @foreach($group as $one)
                              <img src="{{asset('images/user_profile') }}/{{$one->profile_img}}" class="card-img-top" alt="...">
                              @endforeach
                              {{--  <a href="/vendor/{{$vendor->type}}/{{$vendor->id}}">details</a>  --}}
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                {{-- <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> --}}
                                <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $group[0]->averageRating }}" data-size="xs" disabled="">

                            </div>
                        </div>

                          <br>
                          <br>
                    
                          </div>
                          @endif
            @endforeach
                 
                        </div> 
                        </div>
                        </div>
                    
                  
            
            
                </div>
        </div>
    </div>
    
    
 




@endsection