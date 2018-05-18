<?php

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

class UserSurvey extends Controller
{
    protected function setup (Request $request)
    {
      $user = Auth::user();

      $returnData['user'] = $user;
      $returnData['uri'] = 'Survey Response';

      return view('survey_response',['dataArray' => $returnData]);
    }
}
