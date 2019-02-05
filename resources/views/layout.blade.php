@include('layouts.if-login')

@include('layouts.header')

@if (\Route::current()->getName() !== 'home')
  @include('layouts.navbar')
@endif

@include('layouts.messages')

@yield('content')

@include('layouts.footer')

@include('cookieConsent::index')
