<?php

  /**
  * Insert User Data in to the User Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */

namespace App\Http\Controllers\Wallet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WalletMenu extends Controller
{
     /**
  * Insert User Data in to the User Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */

  protected function setup(Request $request) {

    if($user = Auth::user())
    {
      return view ('Wallet/wallet_menu');
    }
    
    else
   {
    return view ('/login');
    }
    
  }
}
