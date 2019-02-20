@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
  <div class="container my-5">
    @php
      $size = $photo->size;
      $MB = sprintf("%4.2f MB", $size/1048576);
    @endphp

  <div class="row justify-content-center my-5">
      <div class="col-md-6">
          <div class="card indigo">
              <div class="card-header">{{ $photo->name }}</div>
                <div class="card-body">
                  <img class="card-img-top" src="/gallery/{{ $photo->name }}" alt="image">
                  <h5 class="py-3">Title: {{ $photo->title }}</h5>
                  <p>Description: <em>{{ $photo->description }}</em></p>
                  <p>Filesize: {{ $MB }}</p>
                  <p>Image Dimensions: {{ $photo->dimensions }}</p> <p><small>Uploaded on: {{ $photo->created_at }}</small>
                  <br><small>Last Modified on: {{ $photo->updated_at }}</small></p>
                </div> <!-- here ends card body -->
          </div> <!-- here ends card -->
      </div> <!-- here ends column -->

      <div class="col-md-6">
          <div class="card indigo">
              <div class="card-header">Update Image Information</div>
                <div class="card-body">
                  <form class="form" action="/photos/{{ $photo->id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH')}}

                      <div class="form-group">
                          <label for="title">New Title</label>
                          <input class="form-control" type="text" name="title" placeholder="{{ old('title') }}" value="{{ $photo->title}}">
                      </div>

                      <div class="form-group">
                          <label for="description">New Description</label>
                          <textarea class="form-control" type="text" name="description" value="{{ $photo->description}}">{{ $photo->description}}</textarea>
                      </div>

                  </div> <!-- here ends card body -->

                  <div class="modal-footer">
                      <table>
                        <td>
                          <button class="btn btn-secondary" type="submit" value="Submit">Update</button>
                          </form>
                        </td>

                    {{-- @include('layouts.confirmDelete') --}}

                        <form class="form" action="/photos/{{ $photo->id }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('delete') }}
                          <td>
                            <button type="submit" class="btn btn-light" onclick="confirmDelete()">Delete</button>
                          </td>
                          <td>
                            <a href="{{ url('/photos')}}" class="btn btn-dark my-2">Back to the Library</a>
                          </td>
                        </form>
                      </table>
                    </div>

                </div> <!-- here ends card body -->
          </div> <!-- here ends card -->
      </div> <!-- here ends column -->

    </div> <!-- here ends row -->
</div> <!-- here ends container -->
@endsection
