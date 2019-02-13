@extends('layout')
@section('title', 'News etc.')
@section('content')
  <h3 class="text-center mb-5">Blog Category: {{ $header }}</h3>

  @if(count($posts) > 0)


    @foreach ($posts as $post)

      <div class="card bg-none mb-2">
        <div class="card-block p-3">
          <div class="row">
            <div class="col-md-4 col-sm-4">
                  <img style="width: 100%" src="/storage/photos/{{ $post->cover_image }}" alt="image">
            </div> <!-- here ends col -->
            <div class="col-md-8 col-sm-8">
                  <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                  <small class="fuxia">Published on: {{ $post->created_at}}</small>
                  <p class="mt-3">{!! $post->body !!}</p>
            </div> <!-- here ends col -->
          </div> <!-- here ends row -->
        </div> <!-- here ends card block-->
      </div> <!-- here ends card -->

    @endforeach
    <p>{{ $posts->links() }}</p>

  @else

    <p>No posts found</p>

  @endif


@endsection
