<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Event;
use DB;
use Carbon\Carbon;

class PagesController extends Controller
{

    public function home()
              {
                $event = DB::table('events')
                    ->whereDate('date', '>', carbon::now())
                    ->orderBy('date', 'asc')
                    ->first();
                  $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
                  return view('home')->with('posts', $posts)
                  ->with('event', $event);
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

    public function dashboard()
              {
                if (!Auth::guest()) {
                  $posts = Post::orderBy('created_at','desc')->paginate(10);

                  $future_events = DB::table('events')
                      ->whereDate('date', '>', carbon::now())
                      ->orderBy('date', 'desc')
                      ->get();
                  $past_events = Event::where('date', '<', carbon::now() )->paginate(10);
                  $next_event = DB::table('events')
                      ->whereDate('date', '>', carbon::now())
                      ->orderBy('date', 'asc')
                      ->first();

                  return view('dashboard')
                    ->with('posts', $posts)
                    ->with('future_events', $future_events)
                    ->with('past_events', $past_events)
                    ->with('next_event', $next_event);

                } else {
                  return view('auth.login')->with('error', 'Please login first!');
                }
              }

    public function logout(Request $request)
              {
                Auth::logout();
                return redirect('/')->with('success', 'You have logged out!');;
              }



}
