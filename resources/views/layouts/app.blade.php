<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!-- Head  -->
    @include('partials._header')  


<body>
    <div id="app">
        @include('partials._inner_nav')

        <main class="container py-5 mb-4">

                @yield('content')

        </main>

    </div>


    <!-- Scripts -->
    @yield('scripts')
    <!--script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    < script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script -->

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