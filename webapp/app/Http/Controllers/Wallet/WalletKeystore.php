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

      try {
        //encode the file contents to base64
        //$keystoreBase64 = base64_encode(file_get_contents(Input::file('keystore')));
        //update database with the encoded value
        $keystoreBase64 = $request->get('keystore');
        DB::table('users')->where('user_id', $user->user_id)->update(['keystore_file'=> $keystoreBase64]);
      }

      catch (\Exception $e) {
        return view ('Wallet/wallet_keystore_upload')->with('error','The file upload has failed');
      }
      $returnData['user_data'] = $user;
      return view('Wallet/wallet_success',['dataArray' => $returnData]);
    }

  }



}
