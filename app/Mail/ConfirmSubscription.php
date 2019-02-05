<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\VerifySubscription;

class ConfirmSubscription extends Mailable
{
    use Queueable, SerializesModels;

    public $subscription;

    public function __construct($verifySubscription)
    {
        $this->subscription = $verifySubscription;
    }

    public function build()
    {
        return $this
            ->from('ribbonsofeuphoria@gmail.com')
            ->view('emails.confirm-subscription');
    }
}
