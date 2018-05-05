<?php

/**
 * Wallet/WalletImport
 * TrueFeedback - Import wallet to Truefeedback
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

class WalletImport extends Controller
{
  /**
  * Return wallet import page to user if authenticated
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return redirect | login | wallet_import
  */

  protected function setup(Request $request) {
    
    if($user = Auth::user())
      {
        return view ('Wallet/wallet_import');
      }
      
    else
    {
      return view ('/login');
    }
        
    } 

}
