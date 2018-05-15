<?php

/**
* Pages/UserProfile
* TrueFeedback - User Profie Controller
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

class UserProfile extends Controller
{
  /**
  * User Settings => User Profile import and view
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => organization
  */

  protected function import(Request $request) {

    $user = Auth::user();

    $returnData['user'] = $user;
    $returnData['uri'] = 'Profile View';
    return view('Admin/user_profile',['dataArray' => $returnData]);
    

    }

}