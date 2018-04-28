<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class myContractController extends Controller
{
    protected function contract (Request $request)
    {
        $user = Auth::user();           
        
        $returnData['user'] = $user;
        $returnData['uri'] = 'My Contract';
        return view('mycontract',['dataArray' => $returnData]);
    }
}
