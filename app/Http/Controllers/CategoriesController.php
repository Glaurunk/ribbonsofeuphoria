<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB;


class CategoriesController extends Controller
{
    public function Insider()
              {
                  $posts = DB::table('posts')->where('category', 'Insider')->paginate(10);
                  return view('categories')->with('posts', $posts)->with('header', 'Insider');
              }

    public function Press()
              {
                $posts = DB::table('posts')->where('category', 'Press')->paginate(10);
                return view('categories')->with('posts', $posts)->with('header', 'Press');
              }

    public function Opinions()
              {
                $posts = DB::table('posts')->where('category', 'Opinions')->paginate(10);
                return view('categories')->with('posts', $posts)->with('header', 'Opinions');
              }

    public function Etcetera()
              {
                $posts = DB::table('posts')->where('category', 'Etcetera')->paginate(10);
                return view('categories')->with('posts', $posts)->with('header', 'Etcetera');
              }

}
