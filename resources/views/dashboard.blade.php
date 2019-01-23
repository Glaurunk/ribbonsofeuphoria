@extends('layout')
@section('title', 'Dashboard')
@section('content')

<!-- BUTTONS CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header grey text-center font-size-2">Hey, Rock Star, you are logged into the Dashboard! Choose what to do next!</div>

                <div class="card-body">
                      <div class="card my-2">
                        <a href="/events/create" class="btn btn-primary">Add a new Event</a>
                      </div>
                      <div class="card my-2">
                        <a class="btn btn-secondary" data-toggle="collapse" data-toggle="tooltip" href="#collapseEvents" role="button" aria-expanded="false" aria-controls="collapseEvents" data-placement="top" title="Click to expand / collapse!">
                          Manage Events
                        </a>
                      </div>
                      <div class="card my-2">
                        <a href="/posts/create" class="btn btn-primary">Create a new Post</a>
                      </div>
                      <div class="card my-2">
                        <a class="btn btn-secondary" data-toggle="collapse" data-toggle="tooltip" href="#collapsePosts" role="button" aria-expanded="false" aria-controls="collapsePosts" data-placement="top" title="Click to expand / collapse!">
                          Manage Posts
                        </a>
                      </div>
                      <div class="card my-2">
                        <a class="btn btn-dark" data-toggle="collapse" data-toggle="tooltip" href="#collapseSubscriptions" role="button" aria-expanded="false" aria-controls="collapseSubscriptions" data-placement="top" title="Click to expand / collapse!">
                          Manage Subscriptions
                        </a>
                      </div>
                      <div class="card my-2">
                        <a href="/logout" class="btn btn-warning">Logout</a>
                      </div>

      <!-- MANAGE EVENTS CARD -->

          <div class="collapse" id="collapseEvents">
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
          </div>

          <!-- POSTS CARDS -->
          <div class="collapse" id="collapsePosts">
            <div class="card card-body indigo my-3">
              <h1 class="fuxia text-center">Posts</h1>
              <hr>
              @include('posts.index')
            </div>
          </div>

          <!-- SUBSCRIPTIONS CARD -->
          <div class="collapse" id="collapseSubscriptions">
            <div class="card card-body indigo my-3">
              <h1 class="fuxia text-center">Subscribers List</h1>
              <hr>
              @include('subscriptions')
            </div>
          </div>


                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->





@endsection
