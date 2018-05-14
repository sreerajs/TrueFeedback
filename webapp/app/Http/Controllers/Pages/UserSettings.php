<?php

/**
* Pages/UserSettings
* TrueFeedback - User Settings Page Controller
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

class UserSettings extends Controller
{
  /**
  * User Settings => Organization Settings View and Data
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => organization
  */

  protected function organization(Request $request) {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'organization') {
      $uri = "Organization";
    }
    $returnData['user'] = $user;
    $returnData['uri'] = $uri;

    $countries = new Countries();
    $returnData['country_list'] = $countries->all()->pluck('cca2','name.common');
    $returnData['user_country'] = $countries->where('cca2', $user->company_location)->pluck('name.common')->first();

    return view('organization',['dataArray' => $returnData]);
  }

  /**
  * User Settings => Profile Settings - Organization Settings
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => organization
  */

  protected function organizationUpdate(Request $request) {
    $user = Auth::user();
    $organization['company_name'] = $request->get('company_name');
    $organization['company_email'] = $request->get('company_email');
    $organization['company_website'] = $request->get('company_website');
    $organization['company_location'] = $request->get('company_location');
    $organization['interested_in'] = $request->get('company_interested_in');
    $organization['applications_per_month'] = $request->get('company_applications_per_month');

    $organizationUpdate = DB::table('users')->where('email', $user->email)->update($organization);

    if($organizationUpdate) {
      return redirect('organization')->with('success', 'Successfully updated your organization profile.');
    } else {
      return redirect('organization')->with('error', 'Failed to update your organization profile.');
    }
  }

  /**
  * User Settings => Profile Settings View and Data
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => profile
  */

  protected function profile(Request $request) {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'profile') {
      $uri = "User Profile";
    }

    else if($uri == 'business/profile') {
      $uri = "Business Profile";
    }

    $returnData['user'] = $user;
    $returnData['uri'] = $uri;
    return view('profile',['dataArray' => $returnData]);
  }

  
  /**
  * User Settings => Profile Settings - Update Profile
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => profile
  */

  protected function profileUpdate(Request $request) {
    $user = Auth::user();
    $first_name = $request->get('first_name');
    $last_name = $request->get('last_name');


    $profileUpdate = DB::table('users')->where('email', $user->email)->update(['first_name'=> $first_name,'last_name' => $last_name]);

    if($profileUpdate) {
      return redirect('profile')->with('success', 'Successfully updated your profile.');
    } else {
      return redirect('profile')->with('error', 'Failed to update your profile.');
    }
  }

  /**
  * User Settings => Profile Settings - Update Profile Password
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => profile
  */

  protected function profilePassword(Request $request) {
    $user = Auth::user();
    $current_password = $request->get('user_current_password');

    if (Hash::check($current_password, $user->password)) {
      if (Hash::check($request->get('user_new_password'), $user->password)) {
        return redirect('profile')->with('error', 'Please choose a new password instead of older one.');
      } else {
        $password = bcrypt($request->get('user_new_password'));
      }
    } else {
      return redirect('profile')->with('error', 'We are unable to process your request.');
    }

    /* Validation Rules */
    $ValidationRules = [
      'user_current_password' => 'required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
      'user_new_password' => 'required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed'
    ];

    /* Error Messages */
    $ErrorMessages = [
      'user_current_password.min' => 'Please enter a valid password',
      'user_current_password.regex' => 'Please enter a secure password - contains an upper case letter, a lower case letter, a digit and a special character',
      'user_new_password.min' => 'Please enter a valid password',
      'user_new_password.regex' => 'Please enter a secure password - contains an upper case letter, a lower case letter, a digit and a special character',
      'user_new_password.confirmed' => 'Passwords are not matching'
    ];

    /* Validation */
    $this->validate($request, $ValidationRules, $ErrorMessages);

    /* Updating Database */
    $passwordUpdate = DB::table('users')->where('email', $user->email)->update(['password'=> $password]);

    if($passwordUpdate) {
      return redirect('profile')->with('success', 'Successfully updated your password.');
    } else {
      return redirect('profile')->with('error', 'Failed to update your password.');
    }
  }
}
