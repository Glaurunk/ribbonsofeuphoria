@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<!-- MANAGE postS CARD -->
<div class="">
  <div class=" card-body indigo my-3">

      <table class="table table-hover">
        <a href="{{ url('/photos/create') }}" class="btn btn-sm btn-light float-left">Add new</a>
        <h3 class="bg-green text-light text-center py-3">
          Photos Table</h3>
        <thead class="bg-green text-light">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Uploaded On</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

@if(count($photos) > 0)

    @foreach ($photos as $photo)
          <tr>
            <th scope="row"><img class="img-fluid" src="/storage/photos/{{ $photo->name }}" alt="Photo" style="max-width: 120px;"></th>
            <td>{{ $photo->created_at }}</td>
            <td>{{ $photo->title }}</td>
            <td>
              <div class="row align-self-start">
                <form class="" action="/photos/{{ $photo->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete photo</button>
                <a href="/photos/{{ $photo->id}}/edit" class="btn green btn-sm">Edit photo info</a>
                </form>
              </div>
            </td>
          </tr>
    @endforeach
  @endif
        </tbody>
      </table>

      <p>{{ $photos->links() }}</p>
      <a href="{{ url('/admin')}}">back to dashboard</a>


  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@endsection
