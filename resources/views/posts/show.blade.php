@extends('layout')
@section('title', $post->title)

@section('content')

  <div class="card bg-none mb-2 p-3">
    <div class="card-block p-3">
      <div class="row">
        <div class="col-md-4 col-sm-4">
              <img style="width: 100%" src="/storage/photos/{{ $post->cover_image }}" alt="image">
        </div>
        <div class="col-md-8 col-sm-8">
              <h4>{{ $post->title }}</h4>
              <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }} | Category: <a href="/{{ $post->category }}">{{ $post->category }}</a></small>
              <p class="mt-3">{!! $post->body !!}</p>

        </div> <!-- here ends col -->
      </div> <!-- here ends row -->
    </div> <!-- here ends card-block -->
  </div> <!-- here ends card -->

@endsection
