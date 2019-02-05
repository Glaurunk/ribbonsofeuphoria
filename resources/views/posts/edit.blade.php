@extends('layout')
@section('title', 'Edit Post')

@section('content')

  <h3 class="text-center mb-5">Edit Post</h3>

  <div class="card indigo p-3 mb-5">
    <form class="form" action="/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="title" class="grey">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $post->title }}" placeholder="title">
        </div>

        <div class="form-group">
            <label for="body" class="grey">Body</label>
            <textarea class="form-control "name="body" placeholder="some text here" id="summary-ckeditor">{{ $post->body }}</textarea>
        </div>

        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category" value="{{ $post->category }}">
            <option>Insider</option>
            <option>Press</option>
            <option>Opinions</option>
            <option>Life, Universe, Everything</option>
          </select>
          <small class="form-text">Choose a category for your post.</small>
        </div>

        <div class="form-group">
            <input type="file" name="cover_image" value="{{ $post->cover_image }}">
            <small class="form-text">Choose a picture for your post.</small>
        </div>

<div class="row justify-conter-start py-3">
  <div class="col-2">
    <button class="btn btn-primary btn-sm" type="submit" value="Submit">Update Post</button>
  </form>
  </div><!-- here ends col1 -->

  <div class="col-2">
    <form class="form" action="/posts/{{ $post->id }}" method="post">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <button type="submit" class="btn btn-danger btn-sm">Delete Post</button>
    </form>
  </div><!-- here ends col2 -->

  <div class="col-2">
    <a href="/dashboard" class="btn btn-warning btn-sm">Cancel</a>
  </div> <!-- here ends col3 -->
</div> <!-- here ends row of buttons -->

  </div> <!-- here ends card -->


@endsection
