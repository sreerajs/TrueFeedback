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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Countries\Package\Countries;

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

    /**
    * Fetching surveys from db
    * @author Stanly Johnson (stanly.johnson@servntire.com)
    *
    * @param  Request | $request
    * @return array | $dataArray
    * @return view | dashboard
    */
    
    //change pagination value here
    $pagination_count = 5;
    $data = DB::table('business_surveys')->where('is_deployed', 1)->paginate($pagination_count);


    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    $returnData['data'] = $data;
    return view('mysurveys',['dataArray' => $returnData]);
    }
}