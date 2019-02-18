@include('layouts.head')
<body>
  <div class="wrapper">
  @include('layouts.if-login')

<!-- Here starts the header -->
<div  id="top" class="container pt-3">

  <div id="app">

    <div class="row justify-content-center show-on-large">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ url('/images/ROE-logo.png')}}" alt="logo" class="logo mx-auto">
      </a>
    </div>

      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
                <a class="navbar-brand hidden" href="{{ url('/') }}">
                  <img src="{{ url('/images/ROE-logo.png')}}" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

<!--the main navigation-->
    <ul class="navbar-nav hidden">
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/bio')}}">The Band <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/music')}}">Music</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/shop')}}">Shop</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/blog')}}">Blog</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
       </li>
       <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Social
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="https://www.facebook.com/RibbonsOfEuphoriaBand/">Facebook</a>
             <a class="dropdown-item" href="#">Twitter</a>
             <a class="dropdown-item" href="https://www.instagram.com/ribbons.of.euphoria/">Instagram</a>
             <a class="dropdown-item" href="https://www.youtube.com/user/TheRibbonsofEuphoria">Youtube</a>
           </div>
         </li>
     </ul>

                    </div><!--here ends collapse navbar -->
                </div><!--here ends container -->
            </nav>
        </div><!--here ends "app" -->
<!-- clear floats div -->
      <div class="divider">
      </div><!-- here ends clear floats div -->
<!-- Here ends the header -->
