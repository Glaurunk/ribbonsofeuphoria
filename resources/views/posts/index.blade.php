  @if(count($posts) > 0)


    @foreach ($posts as $post)

      <div class="card bg-none mb-2">
        <div class="card-block p-3">
          <div class="row">
            <div class="col-md-4 col-sm-4">
                  <img style="width: 100%" src="/public/gallery/{{ $post->cover_image }}" alt="image">
            </div>
            <div class="col-md-8 col-sm-8">
                  <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                  <small class="fuxia">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }} | Category: <a href="/{{ $post->category }}">{{ $post->category }}</a></small>
                  <p class="mt-3">{!! $post->body !!}</p>

            </div> <!-- here ends col -->
          </div> <!-- here ends row -->

          @if (\Request::is('dashboard'))
            @if (!Auth::guest())
              <form class="p-3" action="/posts/{{ $post->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete')}}
                <button type="submit" name="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete Post</button>
                <a href="/posts/{{ $post->id}}/edit" class="btn btn-secondary btn-sm">Edit Post</a>
              </form>
            @endif
          @endif

        </div> <!-- here ends card block-->
      </div> <!-- here ends card -->

    @endforeach
    <p>{{ $posts->links() }}</p>

  @else

    <p>No posts found</p>

  @endif
