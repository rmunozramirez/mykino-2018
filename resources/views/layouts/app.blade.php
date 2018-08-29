<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!-- Head  -->
    @include('partials._header')  

<body>

    <main>

        @yield('content')

    </main>



    <!-- Scripts -->
    @yield('scripts')
    <!--script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    < script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script -->
    @include('partials._javascripts')  
    <script>
        //toastr

        @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")

        @endif

        @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}")

        @endif
    </script>
    
</body>

</html>