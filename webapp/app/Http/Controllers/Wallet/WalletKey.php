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
use App\Http\Requests;
use App\Models\UserLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\EntrustFacade as Entrust;
use Illuminate\Notifications\Notifiable;
use App\Notifications\WelcomeNotification;

class WalletKey extends Controller
{
     /**
  * Insert User Data in to the User Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */

  protected function input(Request $request) {
    
    return view ('Wallet/wallet_privatekey');

  }

  protected function upload(Request $request) {
    
    return view ('Wallet/wallet_success');

  }

  



}
