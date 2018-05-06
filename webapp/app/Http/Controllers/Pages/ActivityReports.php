<?php

/**
* Pages/UserReports
* BytaCoin - User Settings Page Controller
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

class ActivityReports extends Controller
{
    protected function report (Request $request)
    {
        $user = Auth::user();
        $returnData['user'] = $user;
        $returnData['uri'] = 'Activity Reports';
        return view('Admin/activity_reports',['dataArray' => $returnData]);
    }
}
