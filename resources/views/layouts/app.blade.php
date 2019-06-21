<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wedding bell chain') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <link href="{{asset('css/libs/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    
    
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    @yield('style')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
{{--  custom css  --}}

    @yield('content-head-libs')
</head>
<body style="font-size:14px">
    <div id="app">
        {{--  1st navi bar  --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <font color="goldenrod"><b>{{ config('app.name', 'Wedding bell chain') }}</font></b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><font color="red"><b>{{ __('Login') }}</font></b></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><font color="red"><b>{{ __('Register') }}</font></b></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                    {{--  <span class="caret"></span>  --}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="/profile">
                                        Profile
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{--  2nd navi bar  --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/home"><b>Home</font></b> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/our_services"><b>Our Services</b></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/profile"><b>Profile</b></a>
                     </li>
                     
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="/vendor" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
                        Vendors</font></b></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo url('/') ?>/vendor/salon"><b>Salon</b></a>
                        <a class="dropdown-item" href="<?php echo url('/') ?>/vendor/hotel_services"><b>Hotels Services</b></a>
                        <a class="dropdown-item" href="<?php echo url('/') ?>/vendor/videography"><b>Videography</b></a>
                        <a class="dropdown-item" href="<?php echo url('/') ?>/vendor/photography"><b>Photography</b></a>
                        <a class="dropdown-item" href="<?php echo url('/') ?>/vendor/wedding_deco"><b>Wedding Deco</b></a>
                      </div>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link" href="/onlinecalendar"><b>Online Calendar Services</b></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/onlinehelpchatting&wedidea"><b>Online Help Chatting & Wedd Idea</b></a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/photo_gallery"><font color="red"><b>Photo Gallery</font></b></a>
                    </li> --}}
                </ul>
              </div>
              </nav>

              {{--  slide show code  --}}
          <div class="container-fluid, padding-right: 0px,  padding-left: 0px">
            
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div style="height: 550px" class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/slideshow/s1.png') }}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/slideshow/s2.png') }}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/slideshow/s3.png') }}" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/slideshow/s4.png') }}" alt="Fourth slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/slideshow/s5.png') }}" alt="Fourth slide">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('images/slideshow/s6.png') }}" alt="Fourth slide">
                          </div>
                          
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
            </div>
        </div>
        
        <main class="py-4">
            @yield('content')
            <body style='background-color:#FFFACD	'>

        </main>
      </div>
          <!-- Footer -->
          <div style="background-color: #DAA520;">
          <footer class="page-footer font-small unique-color-dark">

          
              <div style="background-color: #DAA520;">
                
                <div class="container">
          
                  <!-- Grid row-->
                  <div class="row py-4 d-flex align-items-center">
          
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0"><b><i>Get connected with us on social networks.</i></b></h6>
                    </div>
                    <!-- Grid column -->
          
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
          
                      <!-- Facebook -->
                      <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                      </a>
                      <!-- Twitter -->
                      <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                      </a>
                      <!-- Google +-->
                      <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                      </a>
                      <!--Linkedin -->
                      <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                      </a>
                      <!--Instagram-->
                      <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                      </a>
          
                    </div>
                    <!-- Grid column -->
          
                  </div>
                  <!-- Grid row-->
          
                </div>
              </div>
          
              <!-- Footer Links -->
              <div style="background-color: #DAA520;">
              <div class="container text-center text-md-left mt-5">
          
                <!-- Grid row -->
                <div class="row mt-3">
          
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold"><b>Wedding Bell Chain</b></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Our website has everything the newly engaged couple needs to start planning their big day, 
                      from fashion and beauty to exhaustive vendor lists and tips and advice, easy-to-navigate. 
                      We make sure to turn your dream wedding into a reality.We provide you all the required information about industry specialists of salon,
                      hotel videography, photography and decorations for your wedding day to be the perfect day.</p>
          
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                  <!-- Links -->
                    
                    <h6 class="text-uppercase font-weight-bold">Services</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                      <a href="/salon"><b>Salon</b></font></a>
                    </p>
                    <p>
                      <a href="/hotel_services"><b>Hotel Services</font></b></a>
                    </p>
                    <p>
                      <a href="/photography"><b>Photography</font></b></a>
                    </p>
                    <p>
                      <a href="/videography"><b>Videography</font></b></a>
                    </p>
                    <p>
                        <a href="/wedding_deco"><b>Wedding Deco</font></b></a>
                    </p>
          
                  </div>
                  <!-- Grid column -->
    
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                      <i class="fas fa-home mr-3"></i> No.101/A, Maradana,Colombo10.</p>
                    <p>
                      <i class="fas fa-envelope mr-3"></i> weddingbellservices@gmail.com</p>
                    <p>
                      <i class="fas fa-phone mr-3"></i>+9471-3045125 </p>
                    <p>
                      <i class="fas fa-print mr-3"></i>+9411-2215423</p>
          
                  </div>
                  <!-- Grid column -->
          
                </div>
                <!-- Grid row -->
          
              </div>
              <!-- Footer Links --
          
            </footer>
            <!-- Footer -->
          </div>
        </div>   

        <script src="js/jquery-3.3.1.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
        <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

        <script src="js/profile.js"></script>
        @yield('script')

</body>
</html>
