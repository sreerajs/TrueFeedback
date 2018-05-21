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

class WalletSuccess extends Controller
{
     /**
  * Insert User Data in to the User Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */

  protected function complete(Request $request) {

    $user = Auth::user();
    $returnData['user_data'] = $user;
    return view('Wallet/wallet_success',['dataArray' => $returnData]);
  }
}
