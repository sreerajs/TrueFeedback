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
use App\Http\Requests;
use App\Models\UserLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\EntrustFacade as Entrust;
use Illuminate\Notifications\Notifiable;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Countries\Package\Countries;

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

      //setting dashboard banner values
      $heading_one = "Surveys";
      $heading_one_value = "0";

      $heading_two = "Responses";
      $heading_two_value = "0";

      $heading_three = "Surveys";
      $heading_three_value = "0";
    }

    else if($uri == 'business/home') {
      $uri = "Business Dashboard";

      //setting dashboard banner values
      $heading_one = "Surveys";
      $heading_one_value = "0";

      $heading_two = "Responses";
      $heading_two_value = "0";

      $heading_three = "Surveys";
      $heading_three_value = "0";
    }

    else if($uri == 'admin/home') {
      $uri = "Admin Dashboard";

      //setting dashboard banner values
      $users_count = DB::table('users')->where('account_type', 'User')->count();
      $business_count = DB::table('users')->where('account_type', 'Business')->count();

      $heading_one = "Users";
      $heading_one_value = $users_count;

      $heading_two = "Businesses";
      $heading_two_value = $business_count;

      $heading_three = "Surveys";
      $heading_three_value = "0";   

    }

    //storing dashboard banner values to array
    $dashboard_banner = [
      "heading_one" => $heading_one,
      "heading_one_value" => $heading_one_value,
      "heading_two" => $heading_two,
      "heading_two_value" => $heading_two_value,
      "heading_three" => $heading_three,
      "heading_three_value" => $heading_three_value,
    ];

    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    $returnData['dashboard_banner'] = $dashboard_banner;
    return view('dashboard',['dataArray' => $returnData]);
  }
}
