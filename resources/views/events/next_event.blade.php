<!-- Events HTML -->
  <div class="card bg-none mb-2">
    <div class="card-block p-3">
      <div class="row">
          <div class="col-4">
              <p class="p-3 green text-center event-box">
                <span class="font-size-3">
                  <?php
                    $date = strtotime($event->date);
                    echo date('j', $date);
                  ?>
                  <br>
                  <?php
                    $date = strtotime($event->date);
                    echo date('M', $date);
                  ?>
                </span><br>
                {{ $event->hour }}</p>
          </div> <!--Here ends col1 -->
          <div class="col-8">
              <h3 class=" mb-3 h-with-link"><a href="/events/{{ $event->id }}">{{ $event->title }}Live at {{ $event->place }}</a></h3>
              <p class="text-justify">{{ $event->body }}</p>
          </div> <!--Here ends col2 -->
      </div> <!--Here ends row -->


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

  </div> <!-- here ends card block-->
</div> <!-- here ends card -->
