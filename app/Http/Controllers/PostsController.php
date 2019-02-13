<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Photo;

class PostsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth', ['except' => [
        'index', 'show'
        ]]);
    }


    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('blog', compact('posts'));
    }


    public function create()
    {
        $photos = Photo::paginate(20);
        return view('posts.create', compact('photos'));
    }


    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
      ]);

          if ($request->input('photo') == '')
          {
            $photoURL = 'noimage.jpg';
          }
          else {
            $photoURL = $request->input('photo');
          }

          $post = new Post;
          $post->title = $request->input('title');
          $post->body = $request->input('body');
          $post->user_id = auth()->user()->id;
          $post->cover_image = $photoURL;
          $post->category = $request->input('category');
          $post->save();

          return redirect('/admin/posts')
              ->with('success', 'Your Post has been created!');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $photos = Photo::paginate(10);
        return view('posts.edit', compact(['photos', 'post']));
    }


    public function update(Request $request, Post $post)
    {
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
      ]);

          if ($request->input('photo') == '')
          {
            $photoURL = $post->cover_image;
          }
          else {
            $photoURL = $request->input('photo');
          }

          $post->title = $request->input('title');
          $post->body = $request->input('body');
          $post->user_id = auth()->user()->id;
          $post->cover_image = $photoURL;
          $post->category = $request->input('category');
          $post->save();

      return redirect('/admin/posts')->with('success', 'Post updated');
    }



    public function destroy(Post $post)
    {
      $post->delete();
      return redirect('/admin/posts')->with('success', 'Post Deleted!');
    }
}
