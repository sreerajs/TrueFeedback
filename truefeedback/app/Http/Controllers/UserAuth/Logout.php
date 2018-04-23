<?php

/**
 * UserAuth/Logout
 * BytaCoin - User Logout Controller
 * PHP Laravel Version 5.5
 *
 * @author Tittu Varghese (tittu@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
 */

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
  /**
  * User Logout Function
  * @author Tittu Varghese (tittu@servntire.com)
  * @return redirect | login | dashboard
  */

  protected function logout() {
    Auth::logout();
    return redirect('login');
  }
}
