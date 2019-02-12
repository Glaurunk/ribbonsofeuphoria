@extends('layouts.app')

@section('content')
<script src="{{ url('js/ckeditor.js') }}"></script>


<h3 class="text-center">Create a new Post</h3>


<div class="card p-3 my-5">

  <form action="/posts" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="the post's title" value="{{ old('title') }}">
      </div>

      <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="content" placeholder="some text here" id="editor" value="{{ old('body') }}"></textarea>
      </div>

      <div class="form-group">
        <label for="category" value="{{ old('category') }}">Category</label>
        <select class="form-control" id="category" name="category">
          <option>Insider</option>
          <option>Press</option>
          <option>Opinions</option>
          <option>Etcetera</option>
        </select>
        <small class="form-text text-muted">Choose a category for your post. Max width: 1999px</small>
      </div>


      <button class="btn btn-success" type="submit" value="Submit" >Create post</button>
      <a href="{{ url('/admin')}}" class="btn btn-secondary">Back to the dashboard</a>

  </form>
</div>
<script>
    ClassicEditor.create( document.querySelector( '#editor' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );
</script>
@endsection
