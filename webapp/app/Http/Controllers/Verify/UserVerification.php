<?php
/**
* VERIFY/UserVerification
* BytaCoin - User Email Verification Controller
* PHP Laravel Version 5.5
*
* @author Tittu Varghese (tittu@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\Verify;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Email;
use App\Models\EmailTemplates;
use Carbon\Carbon;

class UserVerification extends Controller
{
  /**
  * Verify User Email address using email token - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */
  protected function email(Request $request) {
    $verificationToken = $request->route('email_token');
    $userCount = DB::table('users')->where([['verification_token', $verificationToken], ['verified', 'false']])->count();
    if($userCount > 0) {

      /* Querying the user table by passing Email verification token */
      $user = DB::table('users')->where([['verification_token', $verificationToken], ['verified', 'false']])->first();

      /* Updating Status of Verification */
      DB::table('users')->where('verification_token', $verificationToken)->update(['verified'=> true]);

      /**
      * Sending welcome email to the user
      * @author Tittu Varghese (tittu@servntire.com)
      *
      * @param  array | $user
      */

      $emailVariables_UserName = $user->first_name;
      $emailVariables_SubTitle = "Welcome to Bytacoin!";
      $emailVariables_MainTitle = "Get Started with Bytacoin";
      $emailVariables_EmailText = "Thank you for completing registration with us. We are happy to serve for you and click below button to login to your dashboard and checkout our awesome offerings.";
      $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/";
      $emailVariables_ButtonText = "GET STARTED";

      $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

      $emailContent = $emailTemplate->GenerateEmailTemplate();
      $mail = new Email(true,$emailContent);
      $mail->addAddress($user->email,$user->first_name);
      $mail->Subject = 'Welcome to Bytacoin!';
      $mail->send();

      return redirect('login')->with('success', 'Your account has been activated. Please login to access dashboard.');

    } else {

      return redirect('login')->with('error', 'Looks like the verification link is expired or not valid.');

    }
  }

  /**
  * Activate User User Account using account activation token - `users` (Invited User)
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | user_activation | login
  */
  protected function activation(Request $request) {
    $activationToken = $request->route('activation_token');
    $userCount = DB::table('users')->where([['verification_token', $activationToken], ['verified', 'false']])->count();
    if($userCount > 0) {

      /* Querying the user table by passing Email verification token */
      $user = DB::table('users')->where([['verification_token', $activationToken], ['verified', 'false']])->first();

      $returnData['user'] = $user;
      $returnData['activation_token'] = $activationToken;

      return view('user_activation',['dataArray' => $returnData]);

    } else {
      return redirect('login')->with('error', 'Looks like the activation link is expired or not valid.');
    }
  }

  /**
  * Activate User - Set Password - `users` (Invited User)
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login
  */
  protected function activation_email(Request $request) {
    $activationToken = $request->get('activation_token');
    if($request->get('password') == $request->get('password_confirmation')) {
      $userPassword = bcrypt($request->get('password'));
    }

    /* Validation Rules */
    $ValidationRules = [
      'activation_token' => 'required|min:24|max:26',
      'password' => 'required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed'
    ];

    /* Error Messages */
    $ErrorMessages = [
      'password.min' => 'Please enter a valid password',
      'password.regex' => 'Please enter a secure password - contains an upper case letter, a lower case letter, a digit and a special character',
      'password.confirmed' => 'Passwords are not matching'
    ];

    /* Validation */
    $this->validate($request, $ValidationRules, $ErrorMessages);

    $userCount = DB::table('users')->where([['verification_token', $activationToken], ['verified', 'false']])->count();
    if($userCount > 0) {

      /* Querying the user table by passing Email verification token */
      $user = DB::table('users')->where([['verification_token', $activationToken], ['verified', 'false']])->first();

      /* Updating Status of Verification */
      DB::table('users')->where('verification_token', $activationToken)->update(['password'=>$userPassword,'verified'=> true]);

      /**
      * Sending welcome email to the user
      * @author Tittu Varghese (tittu@servntire.com)
      *
      * @param  array | $user
      */

      $emailVariables_UserName = $user->first_name;
      $emailVariables_SubTitle = "Welcome to Bytacoin!";
      $emailVariables_MainTitle = "Get Started with Bytacoin";
      $emailVariables_EmailText = "Thank you for completing registration with us. We are happy to serve for you and click below button to login to your dashboard and checkout our awesome offerings.";
      $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/";
      $emailVariables_ButtonText = "GET STARTED";

      $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

      $emailContent = $emailTemplate->GenerateEmailTemplate();
      $mail = new Email(true,$emailContent);
      $mail->addAddress($user->email,$user->first_name);
      $mail->Subject = 'Welcome to Bytacoin!';
      $mail->send();

      return redirect('login')->with('success', 'Your account has been activated. Please login to access dashboard.');

    } else {
      return redirect('login')->with('error', 'Looks like the activation link is expired or not valid.');
    }
  }

  /**
  * Verify User Email Token - `password_resets` (Password Reset)
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | password-reset
  */
  protected function emailVerificationPasswordReset(Request $request) {
    $verificationToken = $request->route('email_token');
    $userCount = DB::table('password_resets')->where([['token', $verificationToken], ['verified', 'false'], ['created_at', '>', Carbon::now()->subMinutes(5)->toDateTimeString()]])->count();
    if($userCount > 0) {

      $returnData['email_token'] = $verificationToken;

      return view('password_reset',['dataArray' => $returnData]);

    } else {
      return redirect('login')->with('error', 'Looks like the verification link is expired or not valid.');
    }
  }

  /**
  * Reset Password - Email Verification - `users`, `password_reset`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login
  */
  protected function passwordReset(Request $request) {
    $emailToken = $request->get('activation_token');
    if($request->get('password') == $request->get('password_confirmation')) {
      $userPassword = bcrypt($request->get('password'));
    }

    /* Validation Rules */
    $ValidationRules = [
      'activation_token' => 'required|min:24|max:26',
      'password' => 'required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed'
    ];

    /* Error Messages */
    $ErrorMessages = [
      'password.min' => 'Please enter a valid password',
      'password.regex' => 'Please enter a secure password - contains an upper case letter, a lower case letter, a digit and a special character',
      'password.confirmed' => 'Passwords are not matching'
    ];

    /* Validation */
    $this->validate($request, $ValidationRules, $ErrorMessages);

    $userCount = DB::table('password_resets')->where([['token', $emailToken], ['verified', 'false']])->count();

    if($userCount > 0) {

      /* Querying the user table by passing Email verification token */
      $userEmail = DB::table('password_resets')->where([['token', $emailToken], ['verified', 'false']])->first();
      $user = DB::table('users')->where('email',$userEmail->email)->first();

      /* Updating Status of Password Reset */
      DB::table('password_resets')->where('token', $emailToken)->update(['verified'=>true]);
      /* Updating Password */
      DB::table('users')->where('email', $userEmail->email)->update(['password'=>$userPassword]);

      /**
      * Sending welcome email to the user
      * @author Tittu Varghese (tittu@servntire.com)
      *
      * @param  array | $user
      */

      $emailVariables_UserName = $user->first_name;
      $emailVariables_SubTitle = "Password Resetted!";
      $emailVariables_MainTitle = "Welcome back to Bytacoin";
      $emailVariables_EmailText = "Password reset request is completed. Now you can login to your account using your new password.";
      $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/";
      $emailVariables_ButtonText = "GO TO DASHBOARD";

      $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

      $emailContent = $emailTemplate->GenerateEmailTemplate();
      $mail = new Email(true,$emailContent);
      $mail->addAddress($user->email,$user->first_name);
      $mail->Subject = 'Password Resetted!';
      $mail->send();

      return redirect('login')->with('success', 'Your password has been resetted. Please login to access dashboard.');

    } else {
      return redirect('login')->with('error', 'Looks like the activation link is expired or not valid.');
    }
  }

}
