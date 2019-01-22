@extends('layout')
@section('title', 'Shop')
@section('content')
  <h3 class="text-center mb-5">The Shop</h3>

  <h4>Physical Media</h4>
  <br>
  <div class="row">
    <div class="col-sm-6">
        <img class="img-fluid mb-3" src="/images/alboum1.jpg" alt="LP1">
        <p class="fuxia text-center">Ribbons of Euphoria</p>
        <p class="text-center">LP Vinyl Record Limited Edition. Also available on CD</p>
    </div> <!-- here ends col -->
    <div class="col-sm-6">
        <img class="img-fluid mb-3" src="/images/alboum2.jpg" alt="LP2">
        <p class="fuxia text-center">Reaching for the skies</p>
        <p class="text-center">EP Vinyl Record Picture Disc, 165gr. Collectors edition. Printed in 300 copies</p>
    </div> <!-- here ends col -->
  </div> <!-- here ends row -->

  <div class="subscribe p-3 my-5">
    <h4 class="text-center">Buy Now!</h4>
    <p><a class="green" href="https://www.discogs.com/sell/list?artist_id=4339858&ev=ab">Buy from Discogs</a></p>
    <p><a class="green" href="http://www.vinylmonster.gr/index.php?route=product/category&path=60_116">Buy from Vinyl
    Monster</a></p>
    <p><a class="green" href="https://www.facebook.com/pg/RibbonsOfEuphoriaBand/shop/?ref=page_internal">Buy from the band's shop in Facebook</a></p>
    <p><a class="green" href="https://ribbonsofeuphoria.bandcamp.com">Buy the digital versions from Bandcamp</a></p>
  </div>

  <h4>Wearables and memorabilia</h4>
  <br>

  <div class="row">
    <div class="col-sm-4">
        <img class="img-fluid mb-3" src="/images/tshirt1.jpg" alt="tshirt">
        <p class="fuxia text-center">Ribbons of Euphoria purple T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
      <img class="img-fluid mb-3" src="/images/tshirt2.jpg" alt="tshirt">
        <p class="fuxia text-center">Ribbons of Euphoria red T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
      <img class="img-fluid mb-3" src="/images/tshirt3.jpg" alt="tshirt">
      <p class="fuxia text-center">Ribbons of Euphoria cyan T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
        <img class="img-fluid mb-3" src="/images/poster.png" alt="poster">
        <p class="fuxia text-center">Ribbons of Euphoria Poster</p>
    </div> <!-- here ends col -->
  </div> <!-- here ends row -->

  <div class="subscribe p-3 my-5">
    <h4 class="text-center">Buy Now!</h4>
    <p><a class="green" href="https://www.facebook.com/pg/RibbonsOfEuphoriaBand/shop/?ref=page_internal">Buy from the band's shop in Facebook</a></p>
  </div>

@endsection
