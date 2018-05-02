<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
  protected $table = "password_resets";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
      'email', 'token'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'token',
  ];

}
