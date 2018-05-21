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
use Illuminate\Support\Facades\DB;

class WalletKeystore extends Controller
{
  /**
  * Return wallet keystore password entry page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect | login | wallet_keystore_password
  */

  protected function showPassword(Request $request) {

    if($user = Auth::user())
    {
      return view ('Wallet/wallet_keystore_password');
    }

    else
    {
      return view ('/login');
    }

  }

  /**
  * Return wallet keystore upload page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect  wallet_keystore_upload
  */

  protected function passwordSubmit(Request $request) {

    $user = new UserLogin;
    $user->password = $request->get('keystore_password');
    return view ('Wallet/wallet_keystore_upload');

  }

  /**
  * Return wallet keystore upload page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect  wallet_keystore_upload
  */

  protected function uploadFile(Request $request) {

    $user = Auth::user();

    $file = $request->file('keystore');
    $file_name = $file->getClientOriginalName();
    $file_real_path = $file->getRealPath();
    $destinationPath = 'uploads';
    $file->move($destinationPath,$file->getClientOriginalName());


    DB::table('users')
            ->where('id', $user->id)
            ->update(['keystore_file' => $file_name]);

    return view ('Wallet/wallet_keystore_upload');

  }



}
