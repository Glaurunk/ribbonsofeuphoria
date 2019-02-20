@if (!Auth::guest())
    <div class="indigo pt-3 pl-4">
      <div class="row">
        <div class="col-auto">
          <p class="fuxia">Hello admin!</p>
        </div>
        <div class="col-auto">
          <p class="text-center"><a href="/admin" >Dashboard</a></p>
        </div>
        <div class="col-auto">
          <p class="text-center"><a href="/logout" >logout</a></p>
        </div>
      </div>

    </div>
@endif
