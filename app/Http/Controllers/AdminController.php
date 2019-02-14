<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;
use Carbon\Carbon;
use App\Post;
use App\Photo;

class AdminController extends Controller
{


  public function __construct()
        {
          $this->middleware('auth');
        }


  public function dashboard()
        {
            return view('dashboard');
        }

  public function events()
        {
          $past_events = DB::table('events')
            ->whereDate('date', '<', carbon::now())
            ->orderBy('date', 'asc')
            ->paginate(15);
          $future_events = DB::table('events')
            ->whereDate('date', '>', carbon::now())
            ->orderBy('date', 'asc')
            ->paginate(15);
          return view('admin.dash_events', compact(['past_events','future_events' ]));
        }

  public function posts()
        {
            $posts = Post::orderby('created_at', 'desc')->paginate(10);
            return view('admin.dash_posts', compact('posts'));
        }

  public function gallery()
        {
          $not_in_carousels = DB::table('photos')
            ->where('carousel', 0)
            ->get();
          $in_carousels = DB::table('photos')
            ->where('carousel', 1)
            ->get();
          return view('admin.dash_gallery', compact(['in_carousels','not_in_carousels']));
        }

  public function addToCarousel(Request $request)
        {
            $id = $request->input('not_carousel_id');
            $photo = Photo::find($id);
            $photo->carousel = 1;
            $photo->save();
            return redirect()->back()->with('success', 'Photo added to Carousel.');
        }

  public function removeFromCarousel(Request $request)
        {
            $id = $request->input('carousel_id');
            $photo = Photo::find($id);
            $photo->carousel = 0;
            $photo->save();
            return redirect()->back()->with('success', 'Photo removed from Carousel.');
        }

}

// if (!Auth::guest()) {
//   $posts = Post::orderBy('created_at','desc')->paginate(10);
//
//   $future_events = DB::table('events')
//       ->whereDate('date', '>', carbon::now())
//       ->orderBy('date', 'asc')
//       ->get();
//   $future_events->shift();
//   $past_events = Event::where('date', '<', carbon::now() )->paginate(10);
//   $event = DB::table('events')
//       ->whereDate('date', '>', carbon::now())
//       ->orderBy('date', 'asc')
//       ->first();
//   $subscriptions = DB::table('subscriptions')
//       ->paginate(15);
