@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>


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
            <textarea class="form-control "name="body" placeholder="some text here" id="editor">{{ $post->body }}</textarea>
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

<!-- Enter from URL part -->
      <div class="form-group mb-5">
          <p style="color:black;">Cover Image</p>
          <img name="img" class="img-fluid" id="cover" alt="cover" src="/images/noimage.jpg" style="max-width:120px;">
          <p id="photoPath" class="py-2 green">noimage.jpg</p>
          <button type="button" class="btn btn-light btn-sm bt-3" data-toggle="modal" data-target="#inputForm">Change Cover Image or Copy image path</button><br>
          <input type="hidden" name="photo" value="" id="inputField">
      </div>

<!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="inputForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fuxia" id="inputForm">Add a cover image or copy an image's url to the clipboard</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row p-3 light-grey">
                    @foreach ($photos as $photo)
                      <div class="col-3">
                          <img class="thumbnail img-fluid" src="/public/gallery/{{ $photo->name }}" alt="Photo">
                          <a href="#" class="pt-2 fuxia" onclick="copyToInput('{{ $photo->name }}')" >{{ $photo->name }}</a>
                          <a href="#" onclick="insertPhoto('{{ $photo->name }}')">copy to clipboard</a>
                      </div>
                    @endforeach
                  </div> <!-- here ends row -->

                    <p >{{ $photos->links() }}</p>
                    <input type="text" value="" id="hiddenInput">

              </div> <!-- here ends modal-body -->
              </div> <!-- here ends modal-content -->
            </div> <!-- here ends modal-dialogue -->
          </div> <!-- here ends modal -->
<!-- here ends enter from url -->

<div class="row justify-conter-start py-3">
  <div class="col-auto">
    <button class="btn btn-secondary" type="submit" value="Submit">Update Post</button>
  </form>
  </div><!-- here ends col1 -->

  <div class="col-auto">
    <form class="form" action="/posts/{{ $post->id }}" method="post">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <button type="submit" class="btn btn-dark">Delete Post</button>
    </form>
  </div><!-- here ends col2 -->

  <div class="col-auto">
    <a href="{{ url('/admin')}}" class="btn btn-light">Cancel</a>
  </div> <!-- here ends col3 -->
</div> <!-- here ends row of buttons -->

  </div> <!-- here ends card -->

<script>CKEDITOR.replace( 'editor' );</script>

@endsection
