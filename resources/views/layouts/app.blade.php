<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/Admin/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/Admin/icons.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/Admin/app.min.css')}}" type="text/css">
    @livewireStyles
</head>
<body>
            @yield('content')
    <script src="{{asset('js/Admin/vendor.min.js')}}"></script>
    <script src="{{asset('js/Admin/app.js')}}"></script>
    @livewireScripts
</body>
</html>
