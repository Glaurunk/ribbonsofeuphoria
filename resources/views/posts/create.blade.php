@extends('layout')

@section('content')

  <h3 class="text-center">Create a new Post</h3>


<div class="card p-3 my-5">

  <form action="/posts" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="the post's title">
      </div>

      <div class="form-group">
          <label  for="body">Body</label>
          <textarea class="form-control" name="body" placeholder="some text here" id="summary-ckeditor"></textarea>
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category">
          <option>Insider</option>
          <option>Press</option>
          <option>Opinions</option>
          <option>Etcetera</option>
        </select>
        <small class="form-text text-muted">Choose a category for your post. Max width: 1999px</small>
      </div>

      <div class="form-group">
          <input type="file" name="cover_image">
          <small class="form-text text-muted">Choose a picture for your post.</small>
      </div>

      <button class="btn btn-success" type="submit" value="Submit" >Create post</button>
      <a href="/dashboard" class="btn btn-secondary">Back to the dashboard</a>

  </form>
</div>

@endsection
