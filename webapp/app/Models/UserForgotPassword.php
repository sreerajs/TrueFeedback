<?php

/**
* Models/UserForgotPassword
* TrueFeedback - User Forgot Password Model
* PHP Laravel Version 5.5
*
* @author Stanly Johnson (stanly.johnson@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserForgotPassword extends Model
{
    use Notifiable;

    protected $table = "password_resets";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'email', 'token'    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}





