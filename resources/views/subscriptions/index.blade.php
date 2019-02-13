@extends('layouts.app')
@section('content')

<div class="">
  <div class=" card-body indigo my-3">

      <table class="table table-hover">
        <a class="btn btn-sm btn-light" href="{{ url('/subscriptions/create') }}">Add new</a>
        <h3 class="bg-green text-light text-center py-3">
          Subscriptions Table</h3>
        <thead class="bg-green text-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Registered on</th>
            <th scope="col">Email</th>
            <th scope="col">Verified</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

@if(count($subscriptions) > 0)

    @foreach ($subscriptions as $subscription)
          <tr>
            <th scope="row">{{ $subscription->id }}</th>
            <td>{{ $subscription->created_at }}</td>
            <td>{{ $subscription->email }}</td>
            <td>
              @if ($subscription->verified)
                YES
              @else
                <p class="fuxia">NO</p>
              @endif
            </td>
            <td>
              <div class="row align-self-start">
                <form class="" action="/posts/{{ $subscription->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn fuxia btn-sm" onclick="confirmDelete()">Delete Subscriber</button>
                </form>
              </div>
            </td>
          </tr>
    @endforeach
  @endif
        </tbody>
      </table>

      <p>{{ $subscriptions->links() }}</p>
      <a href="{{ url('/admin')}}">back to dashboard</a>


  </div> <!-- here ends card block-->
</div> <!-- here ends card -->

@endsection
