@extends('layout')
@section('title', 'Home Page')
@section('content')
  <div class="col-sm-6 mx-auto">
      <img src="images/jester.png" alt="jester" class="img-fluid">
  </div><!-- end col -->


<div class="row mt-5 indigo justify-content-center">
    <h2 class="p-3">Latest Headlines!</h2>
</div>

<!-- Here starts Next Event section -->
  <div class="row pt-5">
    <div class="col-md-6">
      <h3 class="text-center mb-3 h-with-link">
        <a href="/events/{{ $event->id }}">{{ $event->title }}<br>
           Live at {{ $event->place }}</a></h3>
          <p class="calendar p-3">
            <span class="font-size-3">
              <?php
                $date = strtotime($event->date);
                echo date('j', $date);
              ?>
              <br>
              <?php
                $date = strtotime($event->date);
                echo date('M', $date);
              ?>
            </span><br>
            {{ $event->hour }}</p>
          <p class="text-justify">{{ $event->body }}</p>
    </div><!--Here ends upcoming events -->



<!-- Here starts Latest Posts section -->

  <div class="col-md-6">
    @foreach ($posts as $post)

      <div class="card bg-none">
        <div class="card-block p-2">
          <div class="row">
            <div class="col-md-4 col-sm-4">
                  <img class="mb-3 img-fluid" src="/storage/cover_images/{{ $post->cover_image }}" alt="image">
            </div>
            <div class="col-md-8 col-sm-8">
                  <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                  <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }}</small>
                  <p class="mt-3 post read-more">{{ $post->body }}</p>

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


<div class="row my-5 indigo justify-content-center">
    <h2 class="p-3">Featured Videos!</h2>
</div>

<!-- Here starts video section -->
<div class="text-center mb-5">
<iframe src="https://www.youtube.com/embed/videoseries?list=PLU_1E9-ekoBZXI5Wznq6Sqfqhu8Q3vXdQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<!-- Here ends video Section -->

@endsection
