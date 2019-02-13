@extends('layout')
@section('title', 'Home Page')
@section('content')

  <!-- Here starts 3 columns main nav -->
          <div class="row">

              <div class="col-sm-4 mt-5 main-cols text-center d-none d-md-block">
                <ul class="main-links-ul">
                  <li><a href="{{ url('/bio')}}">The Band</a></li>
                  <li><a href="{{ url('/music')}}">Music</a></li>
                  <li><a href="{{ url('/shop')}}">Shop</a></li>
                  <li><a href="{{ url('/blog')}}">Blog</a></li>
                </ul>
              </div><!-- end col -->

  <!-- 2nd col ith girl -->
          <div class="col-sm-4 main-cols text-center justify-content-center mx-auto">
              <img src="{{ url('images/girlFuxia.png')}}" alt="girl" class="img-fluid image-50">
          </div><!-- end col -->
  <!-- 3rd col with links --->
          <div class="col-sm-4 align-self-end main-cols text-center d-none d-md-block">
            <ul class="main-links-ul">
              <li><a href="https://www.facebook.com/RibbonsOfEuphoriaBand/">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="https://www.instagram.com/ribbons.of.euphoria/">Instagram</a></li>
              <li><a href="https://www.youtube.com/user/TheRibbonsofEuphoria">Youtube</a></li>
              <li><a href="{{ url('/contact')}}">Contact</a></li>
            </ul>
          </div><!-- end col -->
        </div><!-- row -->

<div class="row mt-5 indigo justify-content-center">
    <h2 class="p-3">Latest Headlines!</h2>
</div>

<!-- Here starts Next event section -->
  <div class="row pt-5">
    <div class="col-md-6">

@if (count($next_event) > 0)

      <h3 class="text-center mb-3 h-with-link">
        <a href="/events/{{ $next_event->id }}">{{ $next_event->title }}<br>
           Live at {{ $next_event->place }}</a></h3>
          <p class="calendar p-3">
            <span class="font-size-3">
              <?php
                $date = strtotime($next_event->date);
                echo date('j', $date);
              ?>
              <br>
              <?php
                $date = strtotime($next_event->date);
                echo date('M', $date);
              ?>
            </span><br>
            {{ $next_event->hour }}</p>
          <p class="text-justify">{{ $next_event->body }}</p>

@else

          <h3 class=" mb-3 h-with-link">No upcoming events</h3>
              <p class="p-3 calendar">
                  <span class="font-size-3">Rock<br>on!</span><br>
              </p>
                  <p class="text-justify">Watch regularly for new concerts, events and new releases! Follow us at the social media of your chioce and subscribe to our newsletter to never miss a concert again!</p>

@endif

</div><!--Here ends upcoming events -->

<!-- Here starts Latest Posts section -->

  <div class="col-md-6">
    @foreach ($posts as $post)

      <div class="card bg-none">
        <div class="card-block p-2">
          <div class="row">
            <div class="col-md-4 col-sm-4">
                  <img class="mb-3 img-fluid" src="/storage/photos/{{ $post->cover_image }}" alt="image">
            </div>
            <div class="col-md-8 col-sm-8">
                  <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                  <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }} | Category: <a href="/{{ $post->category }}">{{ $post->category }}</a></small>
            </div> <!-- here ends col -->
          </div> <!-- here ends row -->
        </div> <!-- here ends card block-->
      </div> <!-- here ends card -->

    @endforeach


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
  <div class="card card-body indigo">

    <form method="post" action="/subscriptions">
      {{ csrf_field() }}
      <div class="form-group row">
          <label for="email" class="">{{ __('E-Mail Address') }}</label>

              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
      </div>
        <br>
        <button type="submit" class="btn btn-primary">Subscribe!</button>
      </form>

  </div> <!--here ends card-body -->
</div> <!--here ends collapse -->
<!--END of hidden fields & form -->

  <p class="text-center">and be the first to know about
  <br> upcoming events and new releases!</p>
</div><!-- here ends subscribe -->
<!-- Here ends Subscribe Section -->


<!-- Here starts video section -->
<div class="row my-5 indigo justify-content-center">
    <h2 class="p-3">Featured Videos!</h2>
</div>

<div class="text-center mb-5 pb-5">
  <iframe src="https://www.youtube.com/embed/videoseries?list=PLU_1E9-ekoBZXI5Wznq6Sqfqhu8Q3vXdQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<!-- Here ends video Section -->


<!-- Here starts photo section -->
<div class="row my-5 indigo justify-content-center">
    <h2 class="p-3">Photo Gallery</h2>
</div>
<!-- Here ends photo Section -->



</div><!-- end container -->



@endsection
