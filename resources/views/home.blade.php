<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <!-- Head  -->
    @include('partials._header')  

    <body>
        @yield('content')   
  
    <!-- Insert javascript files  -->
    @include('partials._javascripts')
    </body>
</html>
