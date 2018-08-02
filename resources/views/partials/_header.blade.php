<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Kino @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">    
        <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <script defer src="{{ asset('font-awesome/fontawesome-all.js') }}"></script>
        <!-- link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <Styles -->

</head>