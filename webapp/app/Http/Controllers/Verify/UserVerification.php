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
}
