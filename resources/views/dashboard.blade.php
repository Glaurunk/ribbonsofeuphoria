@extends('layout')
@section('title', 'Dashboard')
@section('content')

<!-- BUTTONS CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header">Hey, Rock Star, you are logged into the Dashboard! Choose what to do next!</div>

                <div class="card-body">
                      <div class="card my-2">
                        <a href="/posts/create" class="btn btn-primary">Add a new Post</a>
                      </div>
                      <div class="card my-2">
                        <a href="/events/create" class="btn btn-primary">Create a new Event</a>
                      </div>
                      <div class="card my-2">
                        <a href="/logout" class="btn btn-warning">Logout</a>
                      </div>

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->


<!-- POSTS CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header">Posts</div>
                  <div class="card-body">

                    @include('posts.index')

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->

<!-- NEXT EVENT CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header">Upcoming Event</div>
                  <div class="card-body">

                    @include('events.next_event')

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->

<!-- UPCOMING EVENTS CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header">Future Events</div>
                  <div class="card-body">

                    @include('events.index')

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->

<!-- PAST EVENTS CARD -->
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card indigo">
                <div class="card-header">Past Events</div>
                  <div class="card-body">

                    @include('events.past_events')

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->
@endsection
