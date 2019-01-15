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
        <script src="js/customJS.js"></script>        <title>Ribbons of Euphoria | home</title>

    </head>
    <body>

      <div class="wrapper">
<!-- Here starts the header -->
      <div class="container pt-5">

          @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else

                  <div class="row">

                    <div class="col-10 text-right">
                        <a href="/" class="no-link-style"><img src="images/ROE-logo.png" alt="logo" class="img-fluid"></a>
                    </div>

                <div class="col-2 align-self-center">
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

<!-- Here starts 3 columns main nav -->
        <div class="row">

            <div class="col mt-5">
              <ul>
                <li><a href="#">The Band</a></li>
                <li><a href="#">The Music</a></li>
                <li><a href="#">The Shop</a></li>
              </ul>
            </div><!-- end col -->

<!-- 2nd col ith girl -->
        <div class="col">
            <img src="images/GirlFuxia.png" alt="">
        </div><!-- end col -->
<!-- 3rd col with links --->
        <div class="col align-self-end">
          <ul class="">
            <li><a class="" href="#">Press</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- end container -->

<!-- Here starts Posts section -->
    <div class="container">
      <div class="row pt-5">
        <div class="col-md-6">
          <a href="#"><h3 class="text-center mb-3 h-with-link">Upcoming Event</h3></a>
            <img src="images/boxY.png" class="box" >
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!--Here ends upcoming events -->

        <div class="col-md-6">
          <div class="post">
            <a href="#"><h5 class="h-with-link">Latest Post #1</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</p>
          </div><!-- here ends post -->
          <a class="read-more" href="#">read more...</a>

            <br>
            <br>

          <div class="post">
            <a href="#"><h5 class="h-with-link">Latest Post #2</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</p>
          </div><!-- here ends post2 -->
          <a class="read-more" href="#">read more...</a>

          <br>
          <br>

        <div class="post">
          <a href="#"><h5 class="h-with-link">Latest Post #3</h5></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</p>
        </div><!-- here ends post2 -->
        <a class="read-more" href="#">read more...</a>

        </div><!--here ends latest posts -->
      </div><!--here ends row -->
<!-- Here ends Post Section -->

<!-- Here starts subscribe section -->
    <div class="subscribe my-5 py-3">
        <a href="#"><h3 class="text-center h-with-link">Subscribe to our Newsletter</h3></a>
        <p class="text-center">and be the first to know about
        <br> upcoming events and new releases!</p>
    </div><!-- here ends subscribe -->
<!-- Here ends Subscribe Section -->

<!-- Here starts video section -->
  <div class="text-center mb-5">
    <iframe src="https://www.youtube.com/embed/NpRXOo9FLUg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
<!-- Here ends video Section -->

<!-- Here starts footer -->
  <footer>
    <div class="row">
        <div class="col-sm-4 text-center">
          <p>designed and created by <a href="https://deepseacoding.com">deepSeaCoding.com</a></p>
        </div><!-- here ends col1 -->
        <div class="col-sm-4 text-center"><p>copyright &copy;2019<br> Ribbons of Euphoria</p>
        </div><!-- here ends col2 -->
        <div class="col-sm-4 text-center"><a href="/policy">Privacy Policy</a>
        </div><!-- here ends col3 -->
    </div><!-- here ends row -->

    <div class="text-center pb-5">
      <a href="/" class="no-link-style"><img src="images/ROE-logo-ART.png" alt="logo" style="width: 10%;"></a>
    </div>
  </footer>
<!-- Here ends footer -->


      </div><!-- here ends container -->
    </div><!-- end wrapper -->
  </body>
</html>
