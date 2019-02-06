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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   {{--  custom css  --}}
   
</head>
<body>
    <div id="app">
        {{--  1st navi bar  --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Wedding bell chain') }}
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                {{--  <a class="navbar-brand" href="#">Navbar</a>  --}}
                {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>  --}}
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/our_services">Our Services</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/profile">Client Account</a>
                     </li>
                     
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="/vendor" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vendors
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/vendor_services.salon">Salon</a>
                        <a class="dropdown-item" href="/vendor_services.hotel_services">Hotels Services</a>
                        {{--  <div class="dropdown-divider"></div>  --}}
                        <a class="dropdown-item" href="/vendor_services.videography">Videography</a>
                        <a class="dropdown-item" href="/vendor_services.photography">Photography</a>
                        <a class="dropdown-item" href="/vendor_services.wedding_deco">Wedding Deco</a>
                      </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/onlinecalendar">Online Calendar Services</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/onlinehelpchatting&wedidea">Online Help Chatting & Wedd Idea</a>
                    </li>
                     
                    {{--  <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Online Calendar Services</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Online Help Chatting & Wedd Idea. </a>
                    </li>  --}}
                  </ul>
                  {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> --}}
                </div>
              </nav>

              {{--  slide show code  --}}
        <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div style="height: 350px" class="carousel-inner">
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
            <body style='background-color:#FFFF99'>

        </main>
    </div>

    {{--  footer start  --}}
      
       <div  class="badge-dark text-light">
            <div style="width: 100%" class="row">
                <div class="col-sm-6"><div class="card-body">
                  <h5 class="card-title">Footer of Web Site</h5>
                  
                  <img src="{{asset('images/symbol/email.JPG') }}" alt="emailicon" width="35";height="35" ><h6>Join Us - weddingbell@gmail.com</h6>
                  <br>
                
                  <img src="{{asset('images/symbol/tele.png') }}" alt="tele" width="35";height="35"><h6>Call Us - 033-2281456/071-3044756</h6>
                  <br>

                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              {{--  feedback bar  start--}}
                <div class="col-sm-6"> <h5 class="card-title">Web Site Progress</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
            </div>
          </div>  
            {{--  <div class="col-sm-6">
            
          </div>  --}}
            
          </div>
        </div>   
</body>
</html>
