<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    
    protected function userWallet(Request $request) {

        return view ('wallet');

    }

    protected function businessWallet(Request $request) {

        return view ('wallet');

    }

}
