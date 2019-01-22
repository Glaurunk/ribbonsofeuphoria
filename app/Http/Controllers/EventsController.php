<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => [
        'index', 'show'
        ]]);
  }


  public function index()
  {
      $events = Event::paginate(15);
      return view('events.index', compact('events'));
  }


  public function create()
  {
      return view('events.create');
  }


  public function store(Request $request)
  {
    $this->validate($request, [
        'title' => 'nullable',
        'body' => 'nullable',
        'place' => 'required',
        'date' => 'required',
        'hour' => 'required|size:5',
    ]);

        $event = new Event;
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->user_id = auth()->user()->id;
        $event->place = $request->input('place');
        $event->date = $request->input('date');
        $event->hour = $request->input('hour');
        $event->save();

        return redirect()->action('PagesController@dashboard', [$event])->with('success', 'Event Created Successfully!');

}



  public function show(Event $event)
  {
      return view('events.show', compact('event'));
  }


  public function edit(Event $event)
  {
      return view('events.edit', compact('event'));
  }


  public function update(Request $request, event $event)
  {
    $this->validate($request, [
      'title' => 'nullable',
      'body' => 'nullable',
      'place' => 'required',
      'date' => 'required',
      'hour' => 'required|size:5',
    ]);

    $event->title = $request->input('title');
    $event->body = $request->input('body');
    $event->user_id = auth()->user()->id;
    $event->place = $request->input('place');
    $event->date = $request->input('date');
    $event->hour = $request->input('hour');
    $event->save();

    return redirect()->action('PagesController@dashboard', [$event])->with('success', 'Event Updated!');
}



  public function destroy(Event $event)
  {
    $event->delete();
    return redirect()->action('PagesController@dashboard', [$event])->with('success', 'Event Deleted!');
  }
}
