<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

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
        return view('posts.create');
    }


    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
          'category' => 'required',
          'cover_image' => ['image', 'nullable', 'max:1999']
      ]);

//Handle File UploadedFile
      if($request->hasFile('cover_image')) {
//Get fileneame with extension
          $fileNameWithext = $request->file('cover_image')->getClientOriginalName();
//Get just file name
          $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
//Get extension
          $extension = $request->file('cover_image')->getClientOriginalExtension();
//Add timestamp to filename
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
//Upload image
          $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

     } else {
         $fileNameToStore = 'noimage.jpg';
      }

          $post = new Post;
          $post->title = $request->input('title');
          $post->body = $request->input('body');
          $post->user_id = auth()->user()->id;
          $post->category = $request->input('category');
          $post->cover_image = $fileNameToStore;
          $post->save();

          return redirect()->action('PagesController@dashboard', [$post])->with('success', 'Post Created');
  }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
      ]);

      //Handle File UploadedFile
              if($request->hasFile('cover_image')) {
      //Get fileneame with extension
                  $fileNameWithext = $request->file('cover_image')->getClientOriginalName();
      //Get just file name
                  $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
      //Get extension
                  $extension = $request->file('cover_image')->getClientOriginalExtension();
      //Add timestamp to filename
                  $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //Upload image
                  $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
             }

      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->category = $request->input('category');
      if($request->hasFile('cover_image')) {
        $post->cover_image = $fileNameToStore;
      }
      $post->save();

      return redirect()->action('PagesController@dashboard', [$post])->with('success', 'Post updated');
    }



    public function destroy(Post $post)
    {
      if ($post->cover_image != 'noimage.jpg') {
      Storage::delete('public/cover_images/'.$post->cover_image);
     }
      dd($post);
      $post->delete();
      return redirect()->action('PagesController@dashboard', [$post])->with('success', 'Post Deleted!');
    }
}
