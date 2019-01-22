@extends('layout')
@section('title', 'The Music')
@section('content')
  <h3 class="text-center">The Music</h3>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-6"style="max-width: 700px;">
      <h4 class="mb-3 text-center">Ribbons of Euphoria</h4>
        <iframe class="mb-3" style="border: 0; width: 350px; height: 621px;" src="https://bandcamp.com/EmbeddedPlayer/album=2303089512/size=large/bgcol=ffffff/linkcol=7137dc/transparent=true/" seamless><a href="http://ribbonsofeuphoria.bandcamp.com/album/ribbons-of-euphoria">Ribbons of Euphoria by Ribbons of Euphoria</a></iframe>
      <div class="">
        <p>Their first album was released in 2014 by D-drop Recordings.</p>
        <p>The songs are a combination of many influences and inspirations of the group, from its founding (2007) until the production of this album with the recordings taking place in 2011.</p>
        <p>released October 2, 2017</p>
        <p>Produced by Ribbons of Euphoria<br>
          Released by D-drop Recordings<br>
          Distributed by <a class="green" href="https://fuzzoverdoserecords.bandcamp.com">Fuzz Overdose Records</a></p>
      </div> <!-- here end info -->
    </div> <!-- here ends col1 -->

    <div class="col-sm-6" style="max-width: 700px;">
      <h4 class="mb-3 text-center">Reaching for the Skies</h4>
        <iframe class="mb-3"style="border: 0; width: 350px; height: 522px;" src="https://bandcamp.com/EmbeddedPlayer/album=1029748364/size=large/bgcol=ffffff/linkcol=7137dc/transparent=true/" seamless><a href="http://ribbonsofeuphoria.bandcamp.com/album/reaching-for-the-skies">Reaching for the Skies by Ribbons of Euphoria</a></iframe>
        <div class="">
          <p>A Mini LP composed through 2016.</p>
          <p>released October 2, 2017</p>
          <p>Recorded at Experience Studio through 2016. <br>
            Mastered at Vintage Studio. <br>
            Produced by Ribbons of Euphoria, All Rights Reserved. <br>
            Distributed by Ikaros Records, Athens, Greece.<br>
            <a class="green" href="http://www.ikarosrecords.gr/">www.ikarosrecords.gr</a></p>
        </div><!-- here end info -->
    </div> <!-- here ends col2 -->
  </div> <!-- here ends row -->

  <div class="subscribe my-5 p-2 text-center">
      <a class="green" href="https://ribbonsofeuphoria.bandcamp.com">listen in bandcamp!</a>
  </div>
@endsection
