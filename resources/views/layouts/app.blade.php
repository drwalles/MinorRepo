<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Star Online Judge</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('public/js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{asset('assets/images/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <style>
        @yield('style')
    </style>


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css')}}" media="screen">
    <link rel='stylesheet' id='camera-css' href="{{ asset('assets/css/camera.css') }}" type='text/css' media='all'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<div class="navbar navbar-inverse">
    <div class="container">

        @include('shared.header')


    </div>
    @yield('content')
    @yield('box')
</div>

@include('shared.footer')
@include('shared.scripts')
</body>
</html>


