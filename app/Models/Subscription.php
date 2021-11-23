<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Subscription as Authenticatable;

//class Subscription extends Authenticatable implements MustVerifyEmail
class Subscription extends Model

{
  protected $guarded = [];

  public function verifySubscription()
            {
                return $this->hasOne('App\VerifySubscription');
            }


}
