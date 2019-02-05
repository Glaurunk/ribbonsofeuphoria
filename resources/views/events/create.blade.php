@extends('layout')

@section('content')

  <h3 class="text-center">Create a new Event</h3>


<div class="card p-3 my-5">

  <form action="/events" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="the event's title (if any)" value="{{ old('title') }}">
      </div>

      <div class="form row">
        <div class="form-group col-6">
            <label for="place">Place</label>
            <input class="form-control" type="text" name="place" placeholder="the event's place" value="{{ old('place') }}">
        </div>

        <div class="form-group col-4">
            <label for="title">Date</label>
            <input class="form-control" type="date" name="date" value="{{ old('date') }}">
        </div>

        <div class="form-group col-2">
            <label for="hour">Hour</label>
            <input class="form-control" type="text" name="hour" placeholder="hh:mm" value="{{ old('hour') }}">
        </div>
      </div>

      <div class="form-group">
          <label  for="body">Body</label>
          <textarea class="form-control" name="body" placeholder="Description of the event (if any)" id="summary-ckeditor" value="{{ old('body') }}"></textarea>
      </div>

      <button class="btn btn-success" type="submit" value="Submit" >Create event</button>
      <a href="/dashboard" class="btn btn-secondary">Back to the dashboard</a>

  </form>
</div>

@endsection
