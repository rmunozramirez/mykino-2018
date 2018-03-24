<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Kino</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" >        
        <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <!-- link href="{{ asset('css/app.css') }}" rel="stylesheet" -->

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body class="full-height">

        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/kino') }}">Kino</a>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>

            @endif
       </div>

        <div class="content titulo flex-center">
            <div class="title m-b-md">
                <h1>My Kino</h1>
                <p>A collection of {{count($films)}} films</p>
            </div>
        </div>                   

        @yield('content')   
  

    <!-- Insert javascript files  -->
    @include('partials._javascripts')
    </body>
</html>
