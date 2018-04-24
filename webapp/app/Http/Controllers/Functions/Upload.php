<?php

/**
* Functions/Upload
* BytaCoin - Upload Functions
* PHP Laravel Version 5.5
*
* @author Tittu Varghese (tittu@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Functions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class Upload extends Controller
{
  /**
  * User Profile Avatar Upload
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $dataArray
  * @return view | dashboard => settings => profile
  */

  protected function avatar(Request $request) {
    $user = Auth::user();
    $uri = $request->path();
    if($uri == 'profile') {
      $uri = "Profile";
    }

    /* Image Upload */
    try {
      $imageBase64 = Image::make(Input::file('file_input_avatar'))->resize(150, 150)->encode('data-url');
      DB::table('users')->where('user_id', $user->user_id)->update(['profile_image'=> $imageBase64]);
    }
    catch (\Exception $e) {
      return redirect('profile')->with('error','Failed to update your profile picture.');
    }
    return redirect('profile')->with('success', 'Successfully updated your profile picture.');
  }

}
