<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Psychedelic rock band based in Athens - GREECE">
        <meta name="keywords" content="ribbons,euphoria,psychedelic,rock,pschedelia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Sta8is @deepseacoding.com">


        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        {{-- <link rel="stylesheet" href="css/customCSS.css"> --}}
        <script src="js/customJS.js"></script>
        <title>Ribbons of Euphoria | {{ $title }})</title>

    </head>
    <body>

      <div class="wrapper">
<!-- Here starts the header -->
        <div class="container pt-5">

            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                    <div class="row mb-5">

                      <div class="col-md-10 text-right">
                          <a href="/" class="no-link-style"><img src="images/ROE-logo.png" alt="logo" class="img-fluid"></a>
                      </div>

                  <div class="col-md-2 align-self-center">
                        <ul class="text-left">
                          <li class="pt-3"><a class="login" href="{{ route('login') }}">Login</a></li>
                      @if (Route::has('register'))
                          <li class=""><a class="login" href="{{ route('register') }}">Register</a></li>
                      @endif
                      @endauth
                      @endif
                    </ul>
                  </div><!--end col-->
                </div><!--end row-->
<!-- Here ends the header -->
