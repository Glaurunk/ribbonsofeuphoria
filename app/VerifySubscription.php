<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifySubscription extends Model
{
      protected $guarded = [];

      public function subscription()
      {
          return $this->belongsTo('App\Subscription', 'subscription_id');
      }

}
