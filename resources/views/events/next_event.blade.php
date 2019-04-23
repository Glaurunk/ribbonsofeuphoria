@if($next_event != '')

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
  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@else

<!-- NO EVENTS HTML -->
    <div class="card bg-none mb-2">
      <div class="card-block p-3">
        <div class="row">
            <div class="col-4">
                <p class="p-3 green text-center event-box">
                  <span class="font-size-3">
                    Rock
                    <br>
                    on!
                  </span><br>
                </p>
            </div> <!--Here ends col1 -->
            <div class="col-8">
                <h3 class=" mb-3 h-with-link">No upcoming events</h3>
                <p class="text-justify">Watch regularly for new concerts, events and new releases! Follow us at the social media of your chioce and subscribe to our newsletter to never miss a concert again!</p>
            </div> <!--Here ends col2 -->
        </div> <!--Here ends row -->
    </div> <!-- here ends card block-->
  </div> <!-- here ends card -->

@endif
