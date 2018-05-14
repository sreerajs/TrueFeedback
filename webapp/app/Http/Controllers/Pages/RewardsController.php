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

    //passing the custom values to page
    $today_reward = "0";
    $total_survey_count = "0";
    $total_rewards = "0";

    $header_data = [
      "today_reward" => $today_reward,
      "total_survey_count" => $total_survey_count,
      "total_rewards" => $total_rewards,
    ];


    $returnData['user'] = $user;
    $returnData['uri'] = "Rewards";
    $returnData['header_data'] = $header_data;
    return view('user_rewards',['dataArray' => $returnData]);

  }


}
