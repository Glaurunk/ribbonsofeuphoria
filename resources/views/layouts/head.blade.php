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
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ url('js/customJS.js') }}"></script>
        <title>Ribbons of Euphoria | @yield('title')</title>

    </head>
