<!-- Edit and Delete buttons -->
        @if (\Request::is('dashboard'))
          @if (!Auth::guest())
            <div class="row">
              <form class="p-3" action="/events/{{ $event->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete event</button>
                <a href="/events/{{ $event->id}}/edit" class="btn btn-secondary btn-sm">Edit event</a>
              </form>
            </div>
          @endif
        @endif
