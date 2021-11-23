<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class PhotoController extends Controller
{

    public function __construct()
          {
            $this->middleware('auth');
          }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderby('created_at', 'desc')->paginate(10);
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'photo' => ['image', 'required', 'max:2048', 'mimes:jpeg,jpg,png,gif'],
        'description' => 'nullable',
    ]);
// Create new filename and Store to disk
        $image = $request->file('photo');
        $filename = 'img-'.time().'.'.$image->getClientOriginalExtension();
        $size = $image->getClientSize();
        $path = $request->file('photo')->move('gallery', $filename);
// Create new photo instance
        $photo = new Photo;
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->name = $filename;
        $photo->carousel = 0;
        $photo->url= 'http://127.0.0.1:8000/gallery/'.$filename;
// put array of dimensions into a string
        $dimensions = getimagesize('gallery/'.$filename);
        $photo->dimensions = $dimensions[0].' width by '.$dimensions[1].' height.';
// get filesize and save instance to db
        $photo->size = $size;
        $photo->save();

        return redirect('/photos')
            ->with('success', 'The image has been added to your Photo Library.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
      return view('photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
      if ($request->input('title') == '')
      {
        $photo->title = $photo->title;
      } else {
        $photo->title = $request->input('title');
      }

      if ($request->input('description') == '')
      {
        $photo->description = $photo->description;
      } else {
      $photo->description = $request->input('description');
      }
      $photo->save();

      return redirect('/photos')
          ->with('success', 'Image information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
      $path = 'public/gallery/'.$photo->name;
      File::delete($path);
      $photo->delete();
      return redirect('/photos')->with('success', 'The image has been deleted from the library!');
    }
}
