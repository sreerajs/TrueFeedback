<?php

  /**
 * Wallet/WalletKeystore
 * TrueFeedback - Upload Keystore file
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

class WalletKeystore extends Controller
{
  /**
  * Return wallet import page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect | login | wallet_import
  */

  protected function password(Request $request) {
    
    if($user = Auth::user())
    {
      return view ('Wallet/wallet_keystore_password');
    }
    
    else
    {
      return view ('/login');
    }    
   

  }

  protected function passwordSubmit(Request $request) {
    
    $user = new UserLogin;
    $user->password = $request->get('keystore_password');
    return view ('Wallet/wallet_keystore_upload');

  }

  protected function upload(Request $request) {
    
    return view ('Wallet/wallet_keystore_upload');

  }

  protected function uploadRequest(Request $request) {
    
    return view ('Wallet/wallet_keystore_upload');

  }



}
