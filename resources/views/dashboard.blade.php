@extends('layouts.app')
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
                        <a href="{{ url('/events/create') }}" class="btn btn-primary">Add a new Event</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/admin/events') }}" class="btn btn-secondary">
                          Manage Events
                        </a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/posts/create') }}" class="btn btn-primary">Create a new Post</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/admin/posts') }}" class="btn btn-secondary">Manage Posts</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/photos/create') }}" class="btn btn-primary">Upload a new Image to the Library</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/photos') }}" class="btn btn-secondary">Manage Photo Library</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/admin/dash_gallery') }}" class="btn btn-secondary">Manage Front Page Photo Gallery</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/subscriptions/create') }}" class="btn btn-primary">Manually add a Subscriber to the Newsletter</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/subscriptions') }}" class="btn btn-secondary">Manage Subscriptions</a>
                      </div>
                      <div class="card my-2">
                        <a href="{{ url('/logout') }}" class="btn btn-dark">Logout</a>
                      </div>

<!-- Closing tags -->

                  </div> <!-- here ends Card body -->
              </div> <!-- here ends Card -->
          </div> <!-- here ends col -->
      </div> <!-- here ends row -->
  </div> <!-- here ends Card container -->

@endsection
