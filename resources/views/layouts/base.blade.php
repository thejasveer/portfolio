<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jasveer Singh - Web Developer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--tailwind--}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <script src="{{ asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
 
     
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body  class="antialiased bg-indigo-900">

    <div id="app">
      
        @yield('vue-content')

    </div>
    @yield('content')


    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('js/plugins.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>