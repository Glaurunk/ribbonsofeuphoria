@extends('layout')
@section('title', 'News etc.')
@section('content')
  <h3 class="text-center mb-5">The Blog</h3>



    <h5 class="mb-5">Next Show!</h5>

@include('events.next_event')

    <h5 class="mb-5">Latest News!</h5>

@include('posts.index')


    <h5 class="mb-5">Other Upcoming!</h5>

@include('events.index')


@endsection
