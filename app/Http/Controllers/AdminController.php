<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;
use Carbon\Carbon;
use App\Post;
use App\Photo;
use App\Place;
use Mapper;

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

  public function mapper()
        {
          $long = '37.973436';
          $lat = '23.725832';
          $places = Place::all();
          $setplace = DB::table('places')
            ->where('active', '1')->first();
          if ($setplace != '')
          {
            $long = $setplace->long;
            $lat = $setplace->lat;
          }
          Mapper::map($long, $lat, ['zoom' => 16]);
          return view('admin.dash_map', compact('places'));
        }

  public function setToMap(Request $request)
        {
            $id = $request->input('place_id');
            $places = Place::all();
            foreach ($places as $place) {
              $place->active = 0;
              $place->save();
            }
            $setonmap = Place::find($id);
            $setonmap->active = 1;
            $setonmap->save();
            return redirect('/admin/map')
              ->with('success', 'Google Maps now is configured. This view will remain until you set another place.');
        }
}
