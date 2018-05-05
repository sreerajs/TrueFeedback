<?php

/**
* Pages/Dashboard
* BytaCoin - User Dashboard Controller
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


class Dashboard extends Controller
{

  /**
  * User Dashboard View and Data
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard
  */

  protected function user(Request $request) {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'home') {
      $uri = "User Dashboard";
    }

    else if($uri == 'business/home') {
      $uri = "Business Dashboard";
    }

    else if($uri == 'admin/home') {
      $uri = "Admin Dashboard";
    }

    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    return view('dashboard',['dataArray' => $returnData]);
  }
}
