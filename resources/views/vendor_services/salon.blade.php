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

                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                            </div>
                    </div>
    
            </div>
            
            {{--  vendor group post past  --}}
            <div class="col-sm-3">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Salon 01</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                              <h3>Are you want appoinment day</h3>
                              <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                              <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                            </div>
                          </div>

                          <br>
                          <br>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Salon 04</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                              <a class="dropdown-item" href="/vendor_services.hotel_services">Hotels Services</a>
                              <h3>Are you want appoinment day</h3>
                              <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                              <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                          </div>
          
            </div>
                    <div class="col-sm-3">
                            <div class="card text-light bg-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Salon 02</div>
                                    <div class="card-body">
                                      <h5 class="card-title">Secondary card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                                      <h3>Are you want appoinment day</h3>
                                      <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                                      <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                                      {{--  <h3>Want Your FEEDBACK</h3>  --}}
                                      <!-- Font Awesome Icon Library -->
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <style>
                                        .checked {
                                        color: orange;
                                        }
                                        </style>
                                        </head>
                                        <body>
        
                                        <h3>Rating ours</h3>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                  </div>

                                  <br>
                          <br>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Salon 05</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                              <a class="dropdown-item" href="/vendor_services.hotel_services">Hotels Services</a>
                              <h3>Are you want appoinment day</h3>
                              <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                              <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                          </div>
                  
            </div>
                    <div class="col-sm-3">
                            <div class="card text-dark bg-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Salon 03</div>
                                    <div class="card-body">
                                      <h5 class="card-title">Secondary card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                                      {{--  <a class="dropdown-item" href="/vendor_services.hotel_services">Hotels Services</a>  --}}
                                      <h3>Are you want appoinment day</h3>
                              <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                              <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    </div>
                                  </div>
                                  <br>
                          <br>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Salon 06</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                              <a class="dropdown-item" href="/vendor_services.hotel_services">Hotels Services</a>
                              <h3>Are you want appoinment day</h3>
                              <a class="show_calendar" href="/onlinecalendar" text="black">Serch to Calendar</a><br><br>
                              <a class="show_gallery" href="/photo_gallery" text="black">Serch to Gallery</a>
                              {{--  <h3>Want Your FEEDBACK</h3>  --}}
                              <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                .checked {
                                color: orange;
                                }
                                </style>
                                </head>
                                <body>

                                <h3>Rating ours</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            
                            </div>
                          </div>
                  
                    </div>
    
                    
                      
                         
      
            
        </div>
    </div>
    
    
 




@endsection