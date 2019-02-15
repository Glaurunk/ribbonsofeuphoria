<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\VerifySubscription;
use App\Subscription;


class newSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public function __construct($token)
    {
        $this->token = $token;
        $verifySubscription = VerifySubscription::where('token', $token)->first();
        $id = $verifySubscription->subscription_id;
        $new = Subscription::where('id', $id)->first();
        $this->email = $new->email;
    }


    public function build()
    {
        return $this
          ->from('ribbons.of.euphoria.band@gmail.com')
          ->view('emails.new-subscriber');
    }
}
