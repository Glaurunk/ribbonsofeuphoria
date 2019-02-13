@extends('layouts.app')
@section('title', 'Edit event')

@section('content')

  <h3 class="text-center mb-5">Edit event</h3>

  <div class="card indigo p-3 mb-5">
    <form class="form" action="/events/{{ $event->id }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}

      <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="{{ old('title') }}" value="{{ $event->title }}">
      </div> <!-- here ends form group -->

      <div class="form row">
        <div class="form-group col-6">
            <label for="place">Place</label>
            <input class="form-control" type="text" name="place" value="{{ $event->place }}">
        </div> <!-- here ends form group -->
        <div class="form-group col-4">
            <label for="date">Date</label>
            <input class="form-control" type="date" name="date" value="{{ $event->date }}">
        </div> <!-- here ends form group -->
        <div class="form-group col-2">
            <label for="hour">Hour</label>
            <input class="form-control" type="text" name="hour" value="{{ $event->hour }}">
        </div> <!-- here ends form group -->
      </div>  <!-- here ends form row -->

      <div class="form-group">
          <label for="body" class="grey">Body</label>
          <textarea class="form-control "name="body" placeholder="{ $event->body }}">{{ $event->body }}</textarea>
      </div>


<div class="row justify-conter-start py-3">
  <div class="col-auto">
    <button class="btn btn-secondary" type="submit" value="Submit">Update event</button>
  </form>
</div> <!-- here ends col1 -->

  <div class="col-auto">
    <form class="form" action="/events/{{ $event->id }}" method="event">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <button type="submit" class="btn btn-dark">Delete event</button>
    </form>
  </div> <!-- here ends col2 -->

  <div class="col-auto">
    <a href="/admin" class="btn btn-light">Cancel</a>
  </div> <!-- here ends col3 -->
</div> <!-- here ends row of buttons -->

  </div> <!-- here ends card -->


@endsection
