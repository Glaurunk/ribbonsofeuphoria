@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="row justify-content-center my-5 p-3 ">
    <div class="card card-body indigo col-md-8">
      <h3 class="text-center">Upload Image to Photo Loibrary</h1>
      <hr>
      <form class="form pb-5" action="/photos" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

          <div class="form-group">
              <label for="title">Title</label>
              <input class="form-control" type="text" name="title" placeholder="title" value="{{ old('title') }}">
          </div>

          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" placeholder="description" value="{{ old('description') }}"></textarea>
          </div>

          <div class="form-group my-5">
                <input type="file" name="photo">
                <small class="form-text">Choose an image from your computer. Maximum file size: 2MB.</small>
          </div> <!-- here ends file input -->

        <button class="btn btn-secondary" type="submit" value="Submit" >Upload</button>
        <a href="{{ url('/photos') }}" class="btn btn-dark">Back to Photo Library</a>
        </form>  <!--END form -->
    </div> <!--here ends card-body -->
  </div>

@endsection
