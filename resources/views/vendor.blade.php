 @extends('layouts.app')

{{--  include content  --}}
 @section('content')

    
<div class="container">
        <div class="row">
            {{--  side bar part  --}}
            {{-- <div class="col-sm-3">
      
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
              </div> --}}
                <div class="col-sm-12">
                        <div class="card bg-dark text-white">
                                <img src="{{asset('images/vendorpic/2.jpeg') }}" height="300px"  class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h5 class="card-title"><b>Salon</b></h5>
                                <p class="card-text">Did you want select best Salon.</p>
                                <a href="vendor/salon">Go to SALONS</a>
                                </button>
                                </div>
                        </div>
                    <br>
                    <br>
                    <br>
                        <div class="card bg-dark text-white">
                        <img src="{{asset('images/vendorpic/4.jpeg') }}" height="300px"  class="card-img" alt="...">
                        <div class="card-img-overlay">
                          <h5 class="card-title"><b>Hotel</b></h5>
                          <p class="card-text">Did you want select best hotel.</p>
                          <a href="vendor/hotel_services">Go to HOTELS</a>
                          </button>
                        </div>
                  </div>
                  <br>
                    <br>
                    <br>
                  <div class="card bg-dark text-white">
                                <img src="{{asset('images/vendorpic/6.jpeg') }}" height="300px"  class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h5 class="card-title"><b>Photography</b></h5>
                                <p class="card-text">Did you want select best Photografer.</p>
                                <a href="vendor/photography">Go to PHOTOGRAPHY</a>
                                </button>
                                </div>
                        </div>
                    <br>
                    <br>
                    <br>
                    <div class="card bg-dark text-white">
                                <img src="{{asset('images/vendorpic/3.jpeg') }}" height="300px"  class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h5 class="card-title"><b>Videography</b></h5>
                                <p class="card-text">Did you want select best Videografer.</p>
                                <a href="vendor/videography">Go to VIDEOGRAPHY</a>
                                </button>
                                </div>
                        </div>
                    <br>
                    <br>
                    <br>
                    <div class="card bg-dark text-white">
                                <img src="{{asset('images/vendorpic/1.jpeg') }}" height="300px"  class="card-img" alt="...">
                                <div class="card-img-overlay">
                                <h5 class="card-title"><b>Wedding Deco</b></h5>
                                <p class="card-text">Did you want select best Wedding Deco.</p>
                                <a href="vendor/wedding_deco">Go to WEDDING DECO</a>
                                </button>
                                </div>
                        </div>
                    <br>
                    <br>
                    <br>




@endsection  