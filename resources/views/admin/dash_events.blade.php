@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')


<script type="text/javascript">
    function show()
    {
      var show = document.getElementsByClassName('past_events');
      for (var i = 0; i < show.length; i++)
      {
        show[i].classList.toggle("hidden");
      }
    }
</script>


<!-- MANAGE EVENTS CARD -->
<div class="">
  <div class=" card-body indigo my-3 rounded">

      <table class="table table-hover table-responsive-md">
            <a href="{{ url('/events/create') }}" class="btn btn-sm btn-light mr-3">Add new</a>
            <button class="btn btn-secondary btn-sm" type="button" name="show" onclick="show()">Show Past Events</button>
        <h3 class="bg-green text-light text-center py-3">
          Events Table</h3>
        <thead class="bg-green text-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Date of the Event</th>
            <th scope="col">Place</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

@if(count($future_events) > 0)

    @foreach ($future_events as $future_event)
          <tr>
            <th scope="row">{{ $future_event->id }}</th>
            <td>{{ $future_event->date }} | {{ $future_event->hour }}</td>
            <td>{{ $future_event->place }}</td>
            <td>
              <div class="row align-self-start">
                <form class="" action="/events/{{ $future_event->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete event</button>
                <a href="/events/{{ $future_event->id}}/edit" class="btn green btn-sm">Edit event</a>
                </form>
              </div>
            </td>
          </tr>
    @endforeach
  @endif
  @if(count($past_events) > 0)

      @foreach ($past_events as $past_event)
            <tr class="bg-secondary hidden past_events">
              <th scope="row">{{ $past_event->id }}</th>
              <td>{{ $past_event->date }} | {{ $past_event->hour }}</td>
              <td>{{ $past_event->place }}</td>
              <td>
                <div class="row align-self-start">
                  <form class="" action="/events/{{ $past_event->id}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('delete')}}
                  <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete event</button>
                  <a href="/events/{{ $past_event->id}}/edit" class="btn green btn-sm">Edit event</a>
                  </form>
                </div>
              </td>
            </tr>
      @endforeach
    @endif
        </tbody>
      </table>

      {{-- <p>{{ $past_events->links() }}</p> --}}
      <a href="{{ url('/admin')}}">back to dashboard</a>


  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@endsection
