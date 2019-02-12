@extends('layouts.app')
@section('content')

<!-- MANAGE postS CARD -->
<div class="">
  <div class=" card-body indigo my-3">

      <table class="table table-hover">
        <thead class="bg-green text-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Created On</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

@if(count($posts) > 0)

    @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->title }}</td>
            <td>
              <div class="row align-self-start">
                <form class="" action="/posts/{{ $post->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete post</button>
                <a href="/posts/{{ $post->id}}/edit" class="btn green btn-sm">Edit post</a>
                </form>
              </div>
            </td>
          </tr>
    @endforeach
  @endif
        </tbody>
      </table>

      <p>{{ $posts->links() }}</p>
      <a href="{{ url('/admin')}}">back</a>


  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@endsection
