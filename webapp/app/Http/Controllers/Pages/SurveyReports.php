<?php

/**
* Pages/SurveyReports
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

class SurveyReports extends Controller
{
    protected function report (Request $request)
    {
        $pagination_count = 5;
        $user = Auth::user();

        $data = DB::table('business_surveys')->paginate($pagination_count);

        $returnData['user'] = $user;
        $returnData['uri'] = 'Survey Reports';
        $returnData['data'] = $data;
        return view('Admin/survey_reports',['dataArray' => $returnData]);
    }
}
