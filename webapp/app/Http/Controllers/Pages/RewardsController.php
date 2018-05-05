<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RewardsController extends Controller
{
   
  /**
  * Rewards - Present the rewards to the view
  * @author  ()
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => organization
  */

  protected function rewards(Request $request) {
    $user = Auth::user();
    $uri = $request->path();

    $returnData['user'] = $user;
    $returnData['uri'] = "Rewards";
    return view('user_rewards',['dataArray' => $returnData]);
  }


}
