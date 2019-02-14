@extends('layout')
@section('title', 'News etc.')
@section('content')
  <h3 class="text-center">The Blog</h3>



    <h5 class="mt-5 mb-3">Next Show!</h5>

@include('events.next_event')

    <h5 class="mt-5 mb-3">Latest News!</h5>

    @if(count($posts) > 0)


      @foreach ($posts as $post)

        <div class="card bg-none mb-2">
          <div class="card-block p-3">
            <div class="row">
              <div class="col-3">
                    <img style="max-width: 120px" src="/storage/photos/{{ $post->cover_image }}" alt="image" class="rounded">
              </div>
              <div class="col-8">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }} | Category: <a href="/{{ $post->category }}">{{ $post->category }}</a></small>
              </div> <!-- here ends col -->
            </div> <!-- here ends row -->
          </div> <!-- here ends card block-->
        </div> <!-- here ends card -->

      @endforeach
      <p>{{ $posts->links() }}</p>

    @else

      <p>No posts found</p>

    @endif



    <h5 class="mt-5 mb-3">Other Upcoming!</h5>

@include('events.index')

<div class="mt-5 mb-2">
  <a href="#"class="link-style green" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="font-size: 1.2em;">
    Archived concerts
  </a>
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
