<?php

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

class WalletCreate extends Controller
{
    protected function password (Request $request)
    {
        $user = new UserLogin;
        $user->password = $request->get('wallet_create_password');     
        return view ('Wallet/wallet_create');
    }

    protected function create (Request $request)
    {
        $user_private_key = "rwoieuroweurioweu";
        $user_wallet_address = "weriou23rjslf";
        $user_keystore_path = '#';
        
        $returnData['user_private_key'] = $user_private_key;
        $returnData['user_wallet_address'] = $user_wallet_address;
        $returnData['user_keystore_path'] = $user_keystore_path;       
        
        return view('Wallet/wallet_create_success',['dataArray' => $returnData]);
    }

    
}
