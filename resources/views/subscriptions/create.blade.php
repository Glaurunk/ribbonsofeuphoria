@extends('layouts.app')
@section('content')
<!-- MANUAL SUBSCRIBTION FORM -->
<div class="row justify-content-center my-5 p-3 ">
    <div class="card card-body indigo col-md-8">
      <h3 class="text-center">Manual Subscription Form</h1>
      <hr>
      <form method="post" action="{{ url('/known_subscriptions')}}">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="email" class="grey">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="pb-3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <p class="grey pt-3">Enter an email address you know and dont need to validate.</p>
            </div>
          <br>
          <button type="submit" class="btn btn-dark">Confirm the Subscription</button>
          <a href="{{ url('/admin') }}" class="btn btn-light">Cancel</a>
        </form>

    </div> <!--here ends card-body -->
  <!--END form -->
</div>

@endsection
