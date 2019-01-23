@if(count($subscriptions) > 0)

  <div class="card bg-none mb-2">
    <div class="card-block p-3">
      <table class="table">
            <thead class="">
              <tr>
                <th scope="col">id</th>
                <th scope="col">email</th>
                <th scope="col">subscription date</th>
                <th scope="col">delete subscriber</th>
              </tr>
            </thead>
            <tbody>

  @foreach ($subscriptions as $subscription)

              <tr>
                <th class="align-middle"scope="row">{{ $subscription->id }}</th>
                <td class="align-middle">{{ $subscription->email }}</td class="align-middle">
                <td class="align-middle">{{ $subscription->created_at }}</td>
                <td>
                  @if (\Request::is('dashboard'))
                    @if (!Auth::guest())
                      <form class="p-3" action="/subscriptions/{{ $subscription->id }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <button type="submit" name="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete Subscriber</button>
                      </form>
                    @endif
                  @endif
              </td>

    @endforeach

        </tbody>
      </table>

    </div> <!-- here ends card block-->
  </div> <!-- here ends card -->

    <p>{{ $subscriptions->links() }}</p>

  @else

    <p>No subscribers yet :(</p>

@endif
