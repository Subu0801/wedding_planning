<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #DAA520;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
            }

            .links > a {
                color: #FF0000	;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 50px;
                height: 58px;
                
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><b>Home</b></a>
                    @else
                        <a href="{{ route('login') }}"><b>Login</b></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><b>Register</b></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{asset('images/profile/second.jpg')}}" alt="welcomepic" height="522" width="1364">
                <div class="title m-b-md">
                   <b><i> Wedding Bell chain</b></i>
                </div>

             <div class="links">
                    <a href="home">Home Page</a>
                    <a href="our_services">Our Services</a>
                    {{--  <a href="profile">Client Account</a>  --}}
                    <a href="vendor">Vendors</a>
                    <a href="onlinecalendar">Online Calendar Services</a>
                    <a href="onlinehelpchatting&wedidea">Online Help Chatting  Wedd Idea</a>
                </div> 
            </div>
            
        </div>
        
    </body>
</html>

