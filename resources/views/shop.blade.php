@extends('layout')
@section('title', 'Shop')
@section('content')
  <h3 class="text-center mb-5">Shop</h3>

  <br>
  <div class="row">
    <div class="col-md-6 col-sm-12">
        <img class="img-fluid mb-3" src="/images/alboum1.jpg" alt="LP1">
        <p class="fuxia text-center">Ribbons of Euphoria</p>
        <p class="text-center">LP Vinyl Record Limited Edition. Also available on CD</p>
    </div> <!-- here ends col -->
    <div class="col-md-6 col-sm-12">
        <img class="img-fluid mb-3" src="/images/alboum2.jpg" alt="LP2">
        <p class="fuxia text-center">Reaching for the skies</p>
        <p class="text-center">EP Vinyl Record Picture Disc, 165gr. Collectors edition. Printed in 300 copies</p>
    </div> <!-- here ends col -->
    <div class="col-md-6 col-sm-12">
        <img class="img-fluid mb-3" src="/images/roe_you_dont_care.jpg" alt="LP3">
        <p class="fuxia text-center">You don't care</p>
        <p class="text-center">Limited edition 12" LP. 180gr Transparent Orange color vinyl in deluxe Gatefold cover with lyric insert.</p>
    </div> <!-- here ends col -->
  </div> <!-- here ends row -->

  <div class="subscribe p-3 my-5">
    <h4 class="text-center">Buy Now!</h4>
    <p class="py-3 text-center">
      <a class="green" href="https://www.discogs.com/sell/list?artist_id=4339858&ev=ab">Discogs</a> |
      <a class="green" href="http://www.vinylmonster.gr/index.php?route=product/category&path=60_116">Vinyl
    Monster</a> |
      <a class="green" href="https://www.facebook.com/pg/RibbonsOfEuphoriaBand/shop/?ref=page_internal">The band's shop in Facebook</a> |
      <a class="green" href="https://ribbonsofeuphoria.bandcamp.com">The digital versions from Bandcamp</a>
    </p>
  </div>

  <h4>Wearables &amp; memorabilia</h4>
  <br>

  <div class="row">
    <div class="col-sm-4">
        <img class="img-fluid mb-3" src="/images/tshirt1.jpg" alt="tshirt">
        <p class="fuxia text-center">ROE purple T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
      <img class="img-fluid mb-3" src="/images/tshirt2.jpg" alt="tshirt">
        <p class="fuxia text-center">ROE red T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
      <img class="img-fluid mb-3" src="/images/tshirt3.jpg" alt="tshirt">
      <p class="fuxia text-center">ROE cyan T-shirt</p>
    </div> <!-- here ends col -->
    <div class="col-sm-4">
        <img class="img-fluid mb-3" src="/images/poster.png" alt="poster">
        <p class="fuxia text-center">ROE Poster</p>
    </div> <!-- here ends col -->
  </div> <!-- here ends row -->

@endsection
