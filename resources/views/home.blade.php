@include('layouts.header')

<!-- Here starts 3 columns main nav -->
        <div class="row no-float">

            <div class="col-sm-4 mt-5 main-cols">
              <ul class="main-links-ul align-right">
                <li><a href="/bio">The Band</a></li>
                <li><a href="/music">The Music</a></li>
                <li><a href="/shop">The Shop</a></li>
                <li><a href="/blog">The Blog</a></li>
              </ul>
            </div><!-- end col -->

<!-- 2nd col ith girl -->
        <div class="col-sm-4 main-cols">
            <img src="images/GirlFuxia.png" alt="girl" class="img-fluid">
        </div><!-- end col -->
<!-- 3rd col with links --->
        <div class="col-sm-4 align-self-end main-cols">
          <ul class="main-links-ul">
            <li><a href="https://www.facebook.com/RibbonsOfEuphoriaBand/">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="https://www.instagram.com/ribbons.of.euphoria/">Instagram</a></li>
            <li><a href="https://www.youtube.com/user/TheRibbonsofEuphoria">Youtube</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- end container -->

<!-- Here starts Posts section -->
    <div class="container">
      <div class="row pt-5">
        <div class="col-md-6">
          <a href="#"><h3 class="text-center mb-3 h-with-link">Next Concert</h3></a>
              <p class="calendar p-3"><span class="font-size-3">21 March</span><br>
              doors open at 19:30</p>
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
        </div> <!-- here ends post2 -->
        <a class="read-more" href="#">read more...</a>

        </div> <!--here ends latest posts -->
      </div> <!--here ends row -->
<!-- Here ends Post Section -->

<!-- Here starts subscribe section -->
    <div class="subscribe my-5 p-3">

  <!-- HIDDEN FIELDS AND FORM -->
      <div class="text-center mb-3">
        <button class="btn green font-size-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Subscribe to our Newsletter
        </button>
      </div> <!--here ends text-center -->
        <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form>
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">You can easily unsubscribe at any time by sending us a blank email with the subject: unsubscribe</small>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Subscribe!</button>
            </form>
        </div> <!--here ends card-body -->
      </div> <!--here ends collapse -->
    <!--END of hidden fields & form -->

        <p class="text-center">and be the first to know about
        <br> upcoming events and new releases!</p>
    </div><!-- here ends subscribe -->
<!-- Here ends Subscribe Section -->

<!-- Here starts video section -->
  <div class="text-center mb-5">
    <iframe src="https://www.youtube.com/embed/mN95s1wmszA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
<!-- Here ends video Section -->

@include('layouts.footer')
