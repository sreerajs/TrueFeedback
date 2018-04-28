<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DeployedContractsController extends Controller
{
    protected function contract (Request $request)
    {
        $user = Auth::user();           
        
        $returnData['user'] = $user;
        $returnData['uri'] = 'Deployed Contracts';
        return view('deployed_contracts',['dataArray' => $returnData]);
    }
}
