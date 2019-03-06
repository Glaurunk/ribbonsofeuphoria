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
                  <li><a href="{{ url('/contact')}}">Contact</a></li>
                </ul>
              </div><!-- end col -->

  <!-- 2nd col with girl -->
          <div class="col-sm-4 main-cols text-center justify-content-center mx-auto">
              <img src="{{ url('images/girlfuxia.png')}}" alt="girl" class="img-fluid image-50">
          </div><!-- end col -->
  <!-- 3rd col with links --->
          <div class="col-sm-4 align-self-end main-cols text-center d-none d-md-block">
            <ul class="main-links-ul">
              <li><a href="https://www.facebook.com/RibbonsOfEuphoria/"><img src="{{ url('/images/facebook.png')}}" alt="facebook" class="icon"></a></li>
              <li><a href="#"><img src="{{ url('/images/twitter.png')}}" alt="twitter" class="icon"></a></li>
              <li><a href="https://www.instagram.com/ribbons.of.euphoria/"><img src="{{ url('/images/instagram.png')}}" alt="instagram" class="icon"></a></li>
              <li><a href="https://www.youtube.com/user/TheRibbonsofEuphoria"><img src="{{ url('/images/youtube.png')}}" alt="youtube" class="icon"></a></li>
            </ul>
          </div><!-- end col -->
        </div><!-- row -->



<!-- Here starts Next event section -->


@if (count($next_event) > 0)
  <div class="row mt-5 indigo justify-content-center">
      <h2 class="p-3">Upcoming Event!</h2>
  </div>
    <div class="row pt-5">
      <div class="col-md-4">
        <h3 class="text-center mb-3 h-with-link">
          <a href="/events/{{ $next_event->id }}">{{ $next_event->title }}<br>
             Live at {{ $next_event->place }}</a></h3>
            <p class="calendar p-3 mx-3">
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

      </div><!--Here ends upcoming events -->
      <div class="col-md-7 mx-3 rounded" style="width:100%; height:266px">
        {!! Mapper::render() !!}
      </div>
</div> <!--here ends row -->

@else
  <div class="row my-5 indigo justify-content-center">
      <h2 class="p-3">No Upcoming Events</h2>
  </div>    <div class="row justify-content-center">

      <div class="col-sm-4 mx-3">
        <p class="p-3 calendar">
            <span class="font-size-3">Rock<br>on!</span><br>
        </p>
      </div>
      <div class="col-sm-4 mx-3 align-self-center">
        <p class="text-justify ">Watch regularly for new concerts, events and new releases! Follow us at the social media of your choice and subscribe to our newsletter to never miss a concert again!</p>
      </div>
    </div>
@endif

<!-- Here starts Latest Posts section -->
<div class="row my-5 indigo justify-content-center">
    <h2 class="p-3">Latest News!</h2>
</div>

    @foreach ($posts as $post)

      <div class="card bg-none">
        <div class="card-block p-2">
          <div class="row justify-content-center">
            <div class="col-md-4 col-sm-4">
                  <img class="mb-3 img-fluid" src="/gallery/{{ $post->cover_image }}" alt="image">
            </div>
            <div class="col-md-8 col-sm-8">
                  <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                  <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }} | Category: <a href="/{{ $post->category }}">{{ $post->category }}</a></small>
            </div> <!-- here ends col -->
          </div> <!-- here ends row -->
        </div> <!-- here ends card block-->
      </div> <!-- here ends card -->

    @endforeach
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

<div class="text-center pb-3">
  <iframe src="https://www.youtube.com/embed/videoseries?list=PLU_1E9-ekoBZXI5Wznq6Sqfqhu8Q3vXdQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<p class="text-center"><a href="https://www.youtube.com/user/TheRibbonsofEuphoria">More videos on Youtube!</a><p>
<!-- Here ends video Section -->


<!-- Here starts photo section -->
<div class="row my-5 indigo justify-content-center">
    <h2 class="p-3">Photo Gallery</h2>
</div>
<div class="row justify-content-center">
  @include('layouts.carousel')
</div>
<p class="text-center mb-5">More photos on <a href="https://www.facebook.com/pg/RibbonsOfEuphoria/photos/?ref=page_internal">Facebook</a> and on <a href="https://www.instagram.com/ribbons.of.euphoria/">Instagram!</a><p>
<!-- Here ends photo Section -->



{{-- </div><!-- end container --> --}}



@endsection
