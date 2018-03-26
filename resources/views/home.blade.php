<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <!-- Head  -->
    @include('partials._header')  

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

        @yield('content')   
  

    <!-- Insert javascript files  -->
    @include('partials._javascripts')
    </body>
</html>
