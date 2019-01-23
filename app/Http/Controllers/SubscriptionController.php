<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Event;
use DB;
use App\Subscription;
use Carbon\Carbon;

class SubscriptionController extends Controller
{

  public function __construct()
            {
              $this->middleware('auth');
            }

  public function store(Request $request)
            {
              $this->validate($request, [
                  'email' => ['required', 'string', 'email', 'max:255', 'unique:subscriptions,email'],
              ]);

              $subscriptions = new Subscription;
              $subscriptions->email = $request->input('email');
              $subscriptions->save();

              $event = DB::table('events')
                  ->whereDate('date', '>', carbon::now())
                  ->orderBy('date', 'asc')
                  ->first();
              $posts = Post::orderBy('created_at', 'desc')
                  ->take(3)->get();
              return redirect('/')
                  ->with('posts', $posts)
                  ->with('event', $event)
                  ->with('success','You have subscribed to the Ribbons Newsletter!');
            }


  public function destroy(Subscription $subscription)
            {
                $subscription->delete();
                return redirect()
                    ->action('PagesController@dashboard', [$subscription])
                    ->with('success', 'Subsciber Removed! We wont miss the bastard!');
            }
}
