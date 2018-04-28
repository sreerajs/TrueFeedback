<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return view('user_rewards');
  }

}
