<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--tailwind--}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-indigo-900">

    <div id="app">
        @yield('content')
        <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">

            <a target="_blank" href="/sorting-visualizer">Sorting Visulaizer</a>
            <a target="_blank" href="/path-finder">Path Finder</a>
            <a target="_blank" href="http://linkedin.wdd12-jasveer.xyz/">Linkedin Clone</a>
            <a target="_blank" href="http://todo.wdd12-jasveer.xyz/">To-Do List</a>
            <a target="_blank" href="http://capstone.wdd12-jasveer.xyz/">Ecommerce</a>

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>