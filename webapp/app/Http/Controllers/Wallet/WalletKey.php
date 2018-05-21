<?php

/**
 * Wallet/WalletKey
 * TrueFeedback - Enter Key to unlock wallet
 * PHP Laravel Version 5.5
 *
 * @author Stanly Johnson (stanly.johnson@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
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
  * Return wallet key page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect | login | wallet_privatekey
  */

  protected function input(Request $request) {

    if($user = Auth::user())
      {
        return view ('Wallet/wallet_privatekey');

      }

    else
      {
        return view ('/login');
      }


   }

   /**
  * Return wallet success page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect | login | wallet_success
  */

  protected function upload(Request $request) {

    if($user = Auth::user())
      {
        $user = Auth::user();
        $returnData['user_data'] = $user;
        return view('Wallet/wallet_success',['dataArray' => $returnData]);
      }

    else
      {
        return view ('/login');
      }


  }


}
