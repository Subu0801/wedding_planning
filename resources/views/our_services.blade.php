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

                {{-- website discription   --}}
                    <div class="col-sm-9">
        <div class="card bg-white text-black">
                  <h1 class="card-title align-center"><b><i><font size="24pt">EASY HELPER CHAIN FOR LISTEN TO WEDDING BELL.</font></b></i></h1>
                  <div>
                  <p class="card-text">Our website has everything the newly engaged couple needs to start planning their big day, 
                                from fashion and beauty to exhaustive vendor lists and tips and advice, easy-to-navigate. 
                                We make sure to turn your dream wedding into a reality.We provide you all the required information about industry specialists of salon,
                                hotel videography, photography and decorations for your wedding day to be the perfect day.</p>
                  
                </div>
                <div>
                        <marquee behavior="scroll" direction="up">
                        <img src="{{asset('images/profile/22.JPG') }}" width="900" height="150" alt="wedding" />
                        </marquee>
                </div>
                <div>
                                <marquee behavior="scroll" direction="down">
                                <img src="{{asset('images/profile/22.JPG') }}" width="900" height="150" alt="wedding" />
                                </marquee>
                        </div>
              </div>
        </div>

        

                                
                            



@endsection