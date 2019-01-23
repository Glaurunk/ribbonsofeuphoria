<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Subscription as Authenticatable;
use App\Subscription;

class Subscription extends Authenticatable implements MustVerifyEmail;
class Subscription extends Model;

{
  protected $guarded = [];
}
