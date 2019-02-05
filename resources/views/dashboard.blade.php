@extends('layout')
@section('title', 'Dashboard')
@section('content')

<!-- BUTTONS CARD -->
<div class="container py-3 mb-5" id="top">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header grey text-center font-size-2" >Hey, Rock Star, you are in the driver's seat! Choose what to do next!</div>

                <div class="card-body">
                      <div class="card my-2">
                        <a href="/events/create" class="btn btn-primary">Add a new Event</a>
                      </div>
                      <div class="card my-2">
                        <a href="#events" class="btn btn-secondary">
                          Manage Events
                        </a>
                      </div>
                      <div class="card my-2">
                        <a href="/posts/create" class="btn btn-primary">Create a new Post</a>
                      </div>
                      <div class="card my-2">
                        <a href="#posts" class="btn btn-secondary">Manage Posts</a>
                      </div>
                      <div class="card my-2">
                        <a href="#subscriptions" class="btn btn-dark">Manage Subscriptions</a>
                      </div>
                      <div class="card my-2">
                        <a href="/logout" class="btn btn-warning">Logout</a>
                      </div>

<!-- MANAGE EVENTS CARD -->
          <div class="" id="events">
            <div class="card card-body indigo my-3">
              <h1 class="fuxia text-center">Events</h1>
              <hr>

              <h3 class="grey">Upcoming Event</h3>
              @include('events.next_event')
              <hr>

              <h3 class="grey">Future Events</h3>
              @include('events.index')
              <hr>

              <h3 class="grey">Past Events</h3>
              @include('events.past_events')
            </div>
            <a href="#top">to top</a>
          </div>

<!-- POSTS CARDS -->
          <div class="" id="posts">
            <div class="card card-body indigo my-3">
              <h1 class="fuxia text-center">Posts</h1>
              <hr>
              @include('posts.index')
            </div>
            <a href="#top">to top</a>
          </div>

<!-- SUBSCRIPTIONS CARD -->
          <div class="" id="subscriptions">
            <div class="card card-body indigo my-3">
              <h1 class="fuxia text-center">Subscribers List</h1>
              <hr>
              @include('subscriptions')

<!-- MANUAL SUBSCRIBTION FORM -->
                      <div class="my-5 p-3 ">
                          <div class="card card-body indigo">
                            <h1 class="fuxia text-center">Manual Subscription Form</h1>
                            <hr>
                            <form method="post" action="/known_subscriptions">
                              {{ csrf_field() }}
                                <div class="form-group row">
                                  <label for="email" class="grey">{{ __('E-Mail Address') }}</label>

                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                      <small class="grey mt-2">Enter an email address you know and dont need to validate.</small>
                                  </div>
                                <br>
                                <button type="submit" class="btn btn-secondary float-right">Subscribe him!!</button>
                              </form>

                          </div> <!--here ends card-body -->
                        <!--END form -->
            </div>
            <a href="#top">to top</a>
          </div>



<!-- Closing tags -->

                  </div> <!-- here ends Card body -->
              </div> <!-- here ends Card -->
          </div> <!-- here ends col -->
      </div> <!-- here ends row -->
  </div> <!-- here ends Card container -->
</div>




@endsection
