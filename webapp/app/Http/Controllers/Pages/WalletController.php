<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    
    protected function userWallet(Request $request) {

    $user = Auth::user();
    $uri = $request->path();   

    $returnData['user'] = $user;
    $returnData['uri'] = 'User Wallet';
    return view('wallet',['dataArray' => $returnData]);


    }

    protected function businessWallet(Request $request) {

    $user = Auth::user();
    $uri = $request->path();   

    $returnData['user'] = $user;
    $returnData['uri'] = 'Business Wallet';
    return view('wallet',['dataArray' => $returnData]);

    }

}
