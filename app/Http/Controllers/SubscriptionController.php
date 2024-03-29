<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\Event;
use DB;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmSubscription;
use App\Mail\newSubscriber;
use App\Models\VerifySubscription;

class SubscriptionController extends Controller
{

  public function __construct()
            {
              $this->middleware('auth',
                ['except' => ['store', 'verifySubscription']
              ]);
            }


  public function index()
            {
              $subscriptions = Subscription::paginate(20);
              return view('subscriptions.index', compact('subscriptions'));
            }

  public function create()
            {
                return view('subscriptions.create');
            }

  public function store(Request $request)
            {
              $this->validate($request, [
                  'email' => ['required', 'string', 'email', 'max:255', 'unique:subscriptions,email'],
              ]);

              $subscriptions = new Subscription;
              $subscriptions->email = $request->input('email');
              $subscriptions->save();

              $verifySubscription = VerifySubscription::create([
                          'subscription_id' => $subscriptions->id,
                          'token' => str_random(40)
                      ]);

              Mail::to($subscriptions->email)->send(new ConfirmSubscription($verifySubscription));

              $event = DB::table('events')
                  ->whereDate('date', '>', carbon::now())
                  ->orderBy('date', 'asc')
                  ->first();
              $posts = Post::orderBy('created_at', 'desc')
                  ->take(3)->get();
              return redirect('/')
                  ->with('posts', $posts)
                  ->with('event', $event)
                  ->with('success','You have chosen to subscribe to the Ribbons Newsletter! A confirmation email has been sent to the address you entered. Please visit your mailbox and confirm the subscription!');
            }


  public function destroy(Subscription $subscription)
            {
                $subscription->delete();
                return redirect('/subscriptions')
                    ->with('success', 'Subscriber Removed!');
            }


  public function verifySubscription($token)
            {
              $verifySubscription = VerifySubscription::where('token', $token)->first();
              if(isset($verifySubscription) ){
                  $subscription = $verifySubscription->subscription;
                  if(!$subscription->verified) {
                      $verifySubscription->subscription->verified = 1;
                      $verifySubscription->subscription->save();
                      Mail::to('ribbons.of.euphoria.band@gmail.com')->send(new newSubscriber($token));
                  }
              } else {
                  return redirect('/')->with('error', 'Sorry your email cannot be identified.');
              }

        return redirect('/')->with('success', 'Thank you for subscribing! We will try our best to keep those newsletters coming with lots of good stuff! You can unsubscribe at any time by sending us a blank email with Subject: Unsubscribe.');

              }


    public function knownSubscription(Request $request)
              {
                $this->validate($request, [
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:subscriptions,email'],
                ]);

                $subscription = new Subscription;
                $subscription->email = $request->input('email');
                $subscription->verified = true;
                $subscription->save();

                return redirect('/subscriptions')
                    ->with('success', 'Subscriber Added!');
              }


}
