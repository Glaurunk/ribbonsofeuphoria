@if (!Auth::guest())
    <div class="log-banner">
      <p>Master, you are logged in!</p>
      <div class="row">
        <div class="col-6">
          <p class="text-center"><a href="/admin" >Dashboard</a></p>
        </div>
        <div class="col-6">
          <p class="text-center"><a href="/logout" >logout</a></p>
        </div>
      </div>

    </div>
@endif
