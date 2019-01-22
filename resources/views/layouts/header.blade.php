<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Ribbons of Euphoria is psychedelic-progressive blues/rock band based in Athens-GREECE. They have recently released their second album 'Reaching for the Skies'.">
        <meta name="keywords" content="ribbons,euphoria,psychedelic,rock,pschedelia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Sta8is @deepseacoding.com">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        {{-- <link rel="stylesheet" href="css/customCSS.css"> --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="js/customJS.js"></script> --}}
        <title>Ribbons of Euphoria | @yield('title')</title>

    </head>
    <body>

      <div class="wrapper">
<!-- Here starts the header -->
      <div class="container pt-3">

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark header-float">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                      <img src="/images/ROE-logo.png" alt="logo" class="logo">
                        {{-- {{ config('app.name', 'Ribbons of Euphoria') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--the main navigation-->
                      <ul class="navbar-nav mr-auto hidden">
                         <li class="nav-item">
                           <a class="nav-link" href="/bio">The Band <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="/music">The Music</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="/shop">The Shop</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="/blog">The Blog</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="/contact">Contact</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Social
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="https://www.facebook.com/RibbonsOfEuphoriaBand/">Facebook</a>
                               <a class="dropdown-item" href="#">Twitter</a>
                               {{-- <div class="dropdown-divider"></div> --}}
                               <a class="dropdown-item" href="https://www.instagram.com/ribbons.of.euphoria/">Instagram</a>
                               <a class="dropdown-item" href="https://www.youtube.com/user/TheRibbonsofEuphoria">Youtube</a>
                             </div>
                           </li>
                       </ul>

<!-- Right Side Of Navbar -->
                        <ul class="?navbar-nav ml-auto">
<!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div><!--here ends dropdown -->
                                </li>
                            @endguest
                        </ul>
                    </div><!--here ends collapse navbar -->
                </div><!--here ends container -->
            </nav>
        </div><!--here ends "app" -->
<!-- clear floats div -->
        <div class="divider">
        </div><!-- here ends clear floats div -->
<!-- Here ends the header -->
