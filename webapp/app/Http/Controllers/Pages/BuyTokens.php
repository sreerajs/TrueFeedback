<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Countries\Package\Countries;

class BuyTokens extends Controller
{
    protected function buy(){

      $user = Auth::user();

      $returnData['user'] = $user;
      $returnData['uri'] = 'Purchase Feedback Tokens';

      return view('buytokens',['dataArray' => $returnData]);
    }
}
