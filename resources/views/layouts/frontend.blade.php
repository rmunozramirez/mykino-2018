<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="de-DE" dir="ltr" >

    @include('frontend.partials.header')

<body>
    <div id="app">
        <main>

            <section id="inner-page" class="header">    
              <!-- Navigation Section -->
              @include('layouts.navigation')

            </section>

            <section id="content">

                @include ('frontend.partials.sub_menu')
              
              @yield('content')

            </section>

            @if($page_name != 'Home page' )
        
                @include('frontend.partials.bottomsection-inner') 

             @endif

            @include('frontend.partials.content-footer')
        
        </main>  

        @include('frontend.partials.footer')   

    </div>

        @include('frontend.partials.scripts') 
    <script>
        //toastr

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

        @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")

        @endif

        @if(Session::has('error'))

        toastr.error("{{Session::get('error')}}")

        @endif

        @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}")

        @endif
    </script>

</body>
</html>