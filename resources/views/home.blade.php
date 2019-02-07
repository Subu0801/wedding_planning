@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <body style='background-color:#FFFF99'>
                <div class="container">
                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        
                            <h6><b>Welcome Wedding Bell Chain!</b></h6>
                        </div>


                        <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <div class="card" style="width: 30rem;">
                                                    <h5 class="card-header">Get the Services</h5>

                                                    {{-- vedor services text share link --}}

                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                              <div class="carousel-item active">
                                                                <a class="slide_show" href="/vendor_services.salon">Salon</a>
                                                              </div>
                                                              <div class="carousel-item">
                                                                <a class="slide_show" href="/vendor_services.hotel_services">Hotels Services</a>
                                                              </div>
                                                              <div class="carousel-item">
                                                                <a class="slide_show" href="/vendor_services.videography">Videography</a>
                                                              </div>
                                                              <div class="carousel-item">
                                                                    <a class="slide_show" href="/vendor_services.photography">Photography</a>
                                                              </div>
                                                              <div class="carousel-item">
                                                                    <a class="slide_show"  href="/vendor_services.wedding_deco">Wedding Deco</a>
                                                              </div>
                                                              <div class="carousel-item">
                                                                    <a class="nav-link" href="/onlinecalendar">Online Calendar Services</a>
                                                              </div>
                                                            </div>
                                                        </div>

                                                        {{-- slide show shre of short cut vendor link --}}
                                                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                  <div class="carousel-item active">
                                                                        <img class="d-block w-100" src="{{asset('images/profile/first.JPG') }}" alt="First slide">
                                                                </div>
                                                                  <div class="carousel-item">
                                                                        <img class="d-block w-100" src="{{asset('images/profile/second.JPG') }}" alt="Second slide">
                                                                  </div>
                                                                  <div class="carousel-item">
                                                                        <img class="d-block w-100" src="{{asset('images/profile/third.JPG') }}" alt="Third slide">
                                                                  </div>
                                                                </div>
                                                                {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                  <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                  <span class="sr-only">Next</span>
                                                                </a> --}}
                                                              </div>
                                                            </div>
                                                  </div>
                                                    
                                                  {{-- web site intro dunction para  --}}
                                    <div class="col-sm-6">
                                            <div class="card" style="width: 30rem;">
                                                    <div class="card-body">
                                                      <h5 class="card-title">Web Site Inreduction Paragraph</h5>
                                                      
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card</p>
                                                      
                                                    </div>
                                                  </div>
                                    </div>
                                </div>
                            </div>

                
            </div>
            <br>
            <br>

            {{-- play video vendors --}}

            <div class="container" >
                    <div class="row">
                        <div class="col-sm-4">
                                <iframe width="350" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                </iframe>

                    </div>
                     
                    
                    {{-- show gallery link --}}
                    <div class="col-sm-4">
                            <div class="card">
                                    
                                    <div class="card-body">
                                      <h1>Phpto Gallery</h1>
                                      <a href="/photo_gallery" class="btn btn-primary">Explore</a>
                                    </div>
                                  </div>
                    </div>
                        
                    
                    {{-- feed back part --}}
                    <div class="col-sm-4">
                            <div class="card">
                                    <h5 class="card-header">Site Vote</h5>
                                    <div class="card-body">
                                      
                                 </div>
                                  </div>
                    </div>
                    </div>
                </div>
            
            
        </div>
        </div>
    </div>


@endsection
