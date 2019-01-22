@extends('layout')
@section('title', $event->title)

@section('content')

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
              <h3 class=" mb-3 h-with-link">{{ $event->title }}Live at {{ $event->place }}</h3>
              <p class="text-justify">{{ $event->body }}</p>
          </div> <!--Here ends col2 -->
      </div> <!--Here ends row -->
    </div> <!-- here ends card block-->
  </div> <!-- here ends card -->


@endsection
