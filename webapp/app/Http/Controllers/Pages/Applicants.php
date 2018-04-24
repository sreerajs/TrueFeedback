<?php

/**
* Pages/Applicants
* BytaCoin - User Applicants Controller
* PHP Laravel Version 5.5
*
* @author Tittu Varghese (tittu@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class Applicants extends Controller
{

  /**
  * User Applicants View and Data
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard
  */

  protected function user(Request $request) {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'applicants') {
      $uri = "Applicants";
    }
    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    return view('applicants',['dataArray' => $returnData]);
  }
}
