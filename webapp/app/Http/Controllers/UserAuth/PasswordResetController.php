<?php

namespace App\Http\Controllers\UserAuth;

use App\Models\PasswordReset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hashids\Hashids;
use App\Models\Email;
use App\Models\EmailTemplates;
use Illuminate\Support\Facades\DB;

class PasswordResetController extends Controller
{
  /**
  * Password Reset
  * @author Tittu Varghese (tittu@servntire.com)
  * @return redirect | login | password-reset email
  */

  protected function forgotPassword(Request $request) {
    $email = $request->get('email');
    $userCount = DB::table('users')->where('email',$email)->count();
    $requestedUser = DB::table('users')->where('email',$email)->first();
    if($userCount > 0) {
      $user = new PasswordReset;
      $user->user_id = $requestedUser->user_id;
      $user->email = $email;
      $hashids = new Hashids($request->get('email'),25);
      $user->token = $hashids->encode(rand(1,9999));

      if($user->save()) {

        $emailVariables_UserName = $requestedUser->first_name;
        $emailVariables_SubTitle = "Requested to reset your password!";
        $emailVariables_MainTitle = "Verify your email address";
        $emailVariables_EmailText = "We would like to make sure that you have requested to reset your account password at Bytacoin. For completion of the reset process, please verify your email using the verification button below.";
        $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/password-reset/email/".$user->token;
        $emailVariables_ButtonText = "VERIFY EMAIL";

        $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

        $emailContent = $emailTemplate->GenerateEmailTemplate();
        $mail = new Email(true,$emailContent);
        $mail->addAddress($user->email,$requestedUser->first_name);
        $mail->Subject = 'Reset password at Bytacoin';
        $mail->send();
      }
      return redirect('login')->with('success', 'You will get an email with password reset instruction in your email if you have an account with us.');

    } else {
      return redirect('login')->with('success', 'You will get an email with password reset instruction in your email if you have an account with us.');
    }
  }
}
