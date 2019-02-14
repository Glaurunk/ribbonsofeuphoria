@include('layouts.head')
@section('title', 'Dashboard')

<body>
  <div class="card container">
    <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Ribbons of Euphoria') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                              <a class="dropdown-item" href="{{ url('/admin') }}">Dashboard
                              </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div> <!-- Here ends collapse navbar -->
        </div><!-- Here ends container -->
    </nav>

      @include('layouts.messages')
      @yield('content')

<!-- Here starts footer -->
      <div class="row justify-content-sm-center py-3">
          <div class="col-sm-auto text-center">
            <p>designed and created by <a href="https://deepseacoding.com">deepSeaCoding.com</a></p>
      </div> <!-- Here ends col -->
    </div> <!-- Here ends row -->
<!-- Here ends footer -->

      </div> <!-- Here ends container -->
  </body>
</html>
