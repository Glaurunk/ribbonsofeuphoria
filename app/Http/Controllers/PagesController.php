<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
              {
                  $title = "Home Page";
                  return view('home')->with('title', $title);
              }

    public function policy()
              {
                  $title = "Privacy Policy";
                  return view('policy')->with('title', $title);
              }

    public function bio()
              {
                $title = "Biography";
                return view('bio')->with('title', $title);
              }

    public function music()
              {
                  $title = "Music";
                  return view('music')->with('title', $title);
              }

    public function shop()
              {
                  $title = "Shop";
                  return view('shop')->with('title', $title);
              }

    public function blog()
              {
                $title = "Blog";
                return view('blog')->with('title', $title);
              }

    public function contact()
              {
                $title = "Contact Us";
                return view('contact')->with('title', $title);
              }


}
