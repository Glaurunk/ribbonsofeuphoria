@extends('layouts.app')
@section('content')

<!-- MANAGE EVENTS CARD -->
<div class="">
  <div class=" card-body indigo my-3">

      <table class="table table-hover">
        <thead class="bg-green text-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Created On</th>
            <th scope="col">Date of the Event</th>
            <th scope="col">Place</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

@if(count($future_events) > 0)

    @foreach ($future_events as $event)
          <tr>
            <th scope="row">{{ $event->id }}</th>
            <td>{{ $event->created_at }}</td>
            <td>{{ $event->date }} | {{ $event->hour }}</td>
            <td>{{ $event->place }}</td>
            <td>
              <div class="row align-self-start">
                <form class="" action="/events/{{ $event->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete event</button>
                <a href="/events/{{ $event->id}}/edit" class="btn green btn-sm">Edit event</a>
                </form>
              </div>
            </td>
          </tr>
    @endforeach
  @endif
        </tbody>
      </table>

      <p>{{ $future_events->links() }}</p>
      <a href="{{ url('/admin')}}">back</a>


  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@endsection
