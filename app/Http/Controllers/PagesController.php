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







}
