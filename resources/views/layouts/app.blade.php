<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Comment Jet')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <style>
        * {
            font-family: "Inter";
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-[#F3F3F3]">
    @include('layouts.header')
    <div class="px-5 lg:px-0">
        @yield('content')
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/aos.js') }}"></script>
    @stack('scripts')
    <script>
        AOS.init();
    </script>
</body>

</html>
