@extends('layout')
@section('title', 'News etc.')
@section('content')
  <h3 class="text-center">The Blog</h3>



    <h5 class="mt-5 mb-3">Next Show!</h5>

@include('events.next_event')

    <h5 class="mt-5 mb-3">Latest News!</h5>

@include('posts.index')


    <h5 class="mt-5 mb-3">Other Upcoming!</h5>

@include('events.index')

<div class="mt-5 mb-2">
  <button class="btn link-style green" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="font-size: 1.2em;">
    Archived concerts
  </button>
</div> <!--here ends text-center -->
  <div class="collapse" id="collapseExample">
  <div class="card card-body indigo mb-5">

@include('events.past_events')

  </div> <!--here ends card-body -->
</div> <!--here ends collapse -->
<div class="my-5">

</div>
<!--END of hidden fields & form -->
@endsection
