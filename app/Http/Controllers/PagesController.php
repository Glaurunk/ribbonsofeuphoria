<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\Event;
use DB;
use App\Models\Subscription;
use Carbon\Carbon;
use Mapper;

class PagesController extends Controller
{

    public function home()
      {
          $long = '37.973436';
          $lat = '23.725832';
          $setplace = DB::table('places')
            ->where('active', '1')->first();
          if ($setplace != '')
          {
            $long = $setplace->long;
            $lat = $setplace->lat;
          }
          Mapper::map($long, $lat, ['zoom' => 16]);

          $not_in_carousels = DB::table('photos')
            ->where('carousel', 0)
            ->get();
          $in_carousels = DB::table('photos')
            ->where('carousel', 1)
            ->get();
          $next_event = DB::table('events')
            ->whereDate('date', '>', carbon::now())
            ->orderBy('date', 'asc')
            ->first();
          $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
          return view('home', compact(['not_in_carousels','in_carousels','next_event','posts']));
      }

    public function policy()
      {
          return view('policy');
      }

    public function bio()
      {
        return view('bio');
      }

    public function music()
      {
          return view('music');
      }

    public function shop()
      {
          return view('shop');
      }

    public function blog()
      {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        $future_events = DB::table('events')
            ->whereDate('date', '>', carbon::now())
            ->orderBy('date', 'asc')
            ->get();
        $future_events->shift();
        $past_events = Event::where('date', '<', carbon::now() )->paginate(10);
        $next_event = DB::table('events')
            ->whereDate('date', '>', carbon::now())
            ->orderBy('date', 'asc')
            ->first();
        return view('blog')
            ->with('posts', $posts)
            ->with('future_events', $future_events)
            ->with('past_events', $past_events)
            ->with('next_event', $next_event);
      }

    public function contact()
      {
        return view('contact');
      }


    public function logout(Request $request)
      {
        Auth::logout();
        return redirect('/')->with('success', 'You have logged out!');;
      }



}
