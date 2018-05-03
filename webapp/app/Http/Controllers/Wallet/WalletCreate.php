<?php
/**
 * Wallet/WalletCreate
 * TrueFeedback - Create Wallet 
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
use Illuminate\Support\Facades\Hash;

class WalletCreate extends Controller
{
    protected function password (Request $request)
    {
        /**
        * Return the create wallet page to user
        * @author Stanly Johnson (stanly.johnson@servntire.com)
        *
        */
        
        return view('Wallet/wallet_create');
    }

    protected function create (Request $request)
    {
        
        /**
        * Collect password from user and create wallet
        * @author Stanly Johnson (stanly.johnson@servntire.com)
        *
        * @param  Request | $request
        * @return redirect | login | success
        */
        
        //getting password from user to create wallet
        $user_private_key = $request->get('wallet_create_password');

        /** this is dummy data */        
        $user_wallet_address = "this-is-just-a-test-address";
        $user_keystore_path = '#';
        /** this is dummy data */

        /**
        
        Write function to create wallet

        @return Wallet address
        
        */


        /**
        * Store wallet address to DB and set $is_wallet_linked to true
        * @author Stanly Johnson (stanly.johnson@servntire.com)
        *
        * @param  Request | $request
        * @return redirect | login | success
        */
        $user = Auth::user();
        $is_wallet_linked = true;
        $wallet_address = $user_wallet_address;

        $walletCreationUpdate = DB::table('users')->where('email', $user->email)->update(['is_wallet_linked'=> $is_wallet_linked,'wallet_address' => $wallet_address]);
        
       
        if(!$walletCreationUpdate) {

            $returnData['user_private_key'] = $user_private_key;
            $returnData['user_wallet_address'] = $user_wallet_address;
            $returnData['user_keystore_path'] = $user->password;    
            
            return view('Wallet/wallet_create_success',['dataArray' => $returnData]);
        } 
        
        else {
          return redirect('/wallet_menu')->with('error', 'Failed to link your wallet');
        }
        
    }

    
}
