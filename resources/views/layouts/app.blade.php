<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jordan Alamilla') }}</title>

        <!--JQUERY CDN-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                crossorigin="anonymous"></script>

        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="{{ asset('js/script.js') }}" defer></script>

        <!--CKEDITOR-->
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        @include( 'inc/nav' )
        @include( 'inc/messages' )

        @yield('content')

        @include( 'inc/footer' )
        
    </body>
    
</html>
