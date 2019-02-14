@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

<h3 class="text-center">Create a new Post</h3>


<div class="card p-3 my-5 indigo">

  <form action="/posts" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="" value="{{ old('title') }}">
      </div>

      <div class="form-group">
          <label for="body">Body</label>
          <div id="toolbar-container"></div>
          <textarea class="form-control normal" name="body" placeholder="{{ old('body') }}" id="editor" value="{{ old('body') }}"></textarea>
      </div>

      <div class="form-group">
        <label for="category" value="{{ old('category') }}">Category</label>
        <select class="form-control" id="category" name="category">
          <option>Insider</option>
          <option>Press</option>
          <option>Opinions</option>
          <option>Etcetera</option>
        </select>
        <small class="form-text">Choose a category for your post.</small>
      </div>

<!-- Enter from URL part -->
      <div class="form-group mb-5">
          <p style="color:black;">Cover Image</p>
          <img name="img" class="img-fluid" id="cover" alt="cover" src="/images/noimage.jpg" style="max-width:120px;">
          <p id="photoPath" class="py-2 green">noimage.jpg</p>
          <button type="button" class="btn btn-light btn-sm bt-3" data-toggle="modal" data-target="#inputForm">Set Cover Image or Copy image path</button><br>
          <input type="hidden" name="photo" value="" id="inputField" data-toggle="tooltip">
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
                          <img class="thumbnail img-fluid" src="/storage/photos/{{ $photo->name }}" alt="Photo">
                          <a href="#" class="pt-2 fuxia" onclick="copyToInput('{{ $photo->name }}')" >{{ $photo->name }}</a>
                          <a href="#" onclick="insertPhoto('{{ $photo->name }}')">copy to clipboard</a>
                      </div>
                    @endforeach
                    <p>{{ $photos->links() }}</p>
                    <input type="text" value="" id="hiddenInput">
                </div> <!-- here ends row -->
              </div> <!-- here ends modal-body -->
              </div> <!-- here ends modal-content -->
            </div> <!-- here ends modal-dialogue -->
          </div> <!-- here ends modal -->
<!-- here ends enter from url -->


      <button class="btn btn-secondary" type="submit" value="Submit" >Create post</button>
      <a href="{{ url('/admin')}}" class="btn btn-dark">Back to the dashboard</a>

  </form>
</div>
<script>CKEDITOR.replace( 'editor' );</script>
@endsection
