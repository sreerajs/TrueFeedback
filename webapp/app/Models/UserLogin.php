<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class UserLogin extends Model
{
  use Notifiable;
  use EntrustUserTrait;

  protected $fillable = [
      'email', 'password'
  ];
}
