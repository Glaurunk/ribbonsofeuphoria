<!-- Events HTML -->

<div class="card bg-none mb-2">
  <div class="card-block p-3">
    <div class="row">
        <div class="col-4">
            <p class="p-3 green text-center event-box">
              <span class="font-size-3">
                <?php
                  $date = strtotime($next_event->date);
                  echo date('j', $date);
                ?>
                <br>
                <?php
                  $date = strtotime($next_event->date);
                  echo date('M', $date);
                ?>
              </span><br>
              {{ $next_event->hour }}</p>
        </div> <!--Here ends col1 -->
        <div class="col-8">
            <h3 class=" mb-3 h-with-link"><a href="/events/{{ $next_event->id }}">{{ $next_event->title }}Live at {{ $next_event->place }}</a></h3>
            <p class="text-justify">{{ $next_event->body }}</p>
        </div> <!--Here ends col2 -->
    </div> <!--Here ends row -->

<!-- Edit and Delete buttons -->
        @if (\Request::is('dashboard'))
          @if (!Auth::guest())
            <div class="row">
              <form class="p-3" action="/events/{{ $next_event->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn btn-danger btn-sm">Delete event</button>
                <a href="/events/{{ $next_event->id}}/edit" class="btn btn-secondary btn-sm">Edit event</a>
              </form>
            </div>
          @endif
        @endif

  </div> <!-- here ends card block-->
</div> <!-- here ends card -->
