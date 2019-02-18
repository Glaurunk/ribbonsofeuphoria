@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="container py-3 mb-5" id="top">
  <div class="row justify-content-center">
      <div class="col-md">
          <div class="card indigo">
              <h3 class="text-center pt-3">Configure Google Map</h3>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col mb-3" style="width: 466px; height: 266px;">
                      {!! Mapper::render() !!}
                    </div>
                  </div>

                  <hr>

                  <h4 class="pt-3">Register a new place</h4>
                  <form class="form" action="{{ url('/places') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-row">
                      <div class="form-group col-4">
                          <label for="name">Stage Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                      </div>
                      <div class="form-group col-4">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" id="long" value="{{ old('longitude') }}" name="longitude">
                        <small>Insert exactly 8 digits separated by dot. Example: 12.345678</small>
                      </div>
                      <div class="form-group col-4">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" value="{{ old('latitude') }}">
                        <small>Use only coordinates in Greece</small>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
                  <hr>

  <h4 class="pt-5">Places Table</h4>

  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col"><strong>Stage Name</strong></th>
        <th scope="col"><strong>Longitude</strong></th>
        <th scope="col"><strong>Latitude</strong></th>
        <th scope="col"><strong>Active</strong></th>

        <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody>
  @foreach ($places as $place)
      <tr>
        <th scope="row">{{ $place->name }}</th>
        <td>{{ $place->long }}</td>
        <td>{{ $place->lat }}</td>
        @if ($place->active)
          <td class="green"><strong>YES</strong></td>
        @else
          <td>NO</td>
        @endif


        <td>
          <div class="row">
                <div class="col-2">
                  <form class="form" action="/places/{{ $place->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-sm btn-dark" onclick="confirmDelete()">delete</button>
                  </form>
                </div>
                <div class="col-auto">
                  <form class="form" action="/admin/map" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="place_id" value="{{ $place->id }}">
                    <button type="submit" class="btn btn-sm btn-secondary">set to map</button>
                  </form>
                </div>
            </div>
        </td>
      </tr>
  @endforeach

    </tbody>
  </table>
  <hr>

  <p><a href="https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=el">Help on Google coordinates</a>
  | <a href="{{ url('/admin')}}">back to dashboard</a></p>

                </div> <!-- here ends Card body -->
            </div> <!-- here ends Card -->
        </div> <!-- here ends col -->
    </div> <!-- here ends row -->
</div> <!-- here ends Card container -->

@endsection
