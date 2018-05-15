<?php

/**
* Pages/UserReports
* TreuFeedback - Admin User Report Page
* PHP Laravel Version 5.5
*
* @author Stanly Johnson (stanly.johnson@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Countries\Package\Countries;

class UserReports extends Controller
{
    protected function report (Request $request)
    {
        //change pagination value here
        $pagination_count = 5;
        
        
        $user = Auth::user();

        $users_count = DB::table('users')->where('account_type', 'User')->count();
        $business_count = DB::table('users')->where('account_type', 'Business')->count();
        $data = DB::table('users')->paginate($pagination_count);

        $returnData['user'] = $user;
        $returnData['uri'] = 'User Reports';
        $returnData['user_count'] = $users_count;
        $returnData['business_count'] = $business_count;
        $returnData['data'] = $data;
        return view('Admin/user_reports',['dataArray' => $returnData]);
    }
}
