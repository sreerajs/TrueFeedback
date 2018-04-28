<?php

/**
* Pages/Dashboard
* TrueFeedback - User Dashboard Controller
* PHP Laravel Version 5.5
*
* @author Abhijith Sudhakar (abhijith@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class mySurveys extends Controller
{
  /**
  * User Dashboard View and Data
  * @author Abhijith Sudhakar (abhijith@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard
  */

    protected function mysurveys(Request $request)
    {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'mysurveys') {
      $uri = "My Surveys";
    }
    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    return view('mysurveys',['dataArray' => $returnData]);
    }
}