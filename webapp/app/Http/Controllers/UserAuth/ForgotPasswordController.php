<?php
/**
 * UserAuth/ForgotPasswordController
 * TrueFeedback - Forgot Password
 * PHP Laravel Version 5.5
 *
 * @author Stanly Johnson (stanly.johnson@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
 */

namespace App\Http\Controllers\UserAuth;
//use App\Models\UserRegister;
use App\Models\UserForgotPassword;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Hashids\Hashids;
use App\Models\Email;
use App\Models\EmailTemplates;
use App\Models\Role;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;


class ForgotPasswordController extends Controller
{

  /**
  * Insert User Data in to the Password Resets Table if the email exist in Users table
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */


  protected function create(Request $request) {

    /*check if received email address exist in User database */
    $user = User::where('email',$request->get('email_address'))->first();
    if (is_null($user)) {
      return redirect('forgot_password')->with('error', 'Your email is not registered with TrueFeedback. Please check again.');
    }
    
    //process request to reset password
    else{
    }

    $user = new UserForgotPassword;
    $hashids = new Hashids($request->get('email_address'),9);
    $user->user_id = $hashids->encode(rand(1,9999));
    $user->email = $request->get('email_address');
        

    /* User Email Verification Token */
    $hashidSalt = "UserLoginParameterEncryptionCode".$user->email;
    $hashids = new Hashids($hashidSalt,25);
    $user->token = $hashids->encode(rand(11,999));
        

    /* Validation Rules */
    $ValidationRules = [
          'email_address' => 'required|email',
    ];

        /* Error Messages */
    $ErrorMessages = [
      'email_address.required' => 'Please enter a valid email address',
      'email_address.does.not.exist' => 'The email address was not found in our system',
    ];

        /* Validation */
     $this->validate($request, $ValidationRules, $ErrorMessages);

        /* Inserting to Database */
    if($user->save()) {

          /**
          * Sending password reset email to the user
          * @author Stanly Johnson (stanly.johnson@servntire.com)
          *
          * @param  array | $user
          */
          $emailVariables_UserName = "";
          $emailVariables_SubTitle = "Confirm Password Reset.";
          $emailVariables_MainTitle = "Reset your Password";
          $emailVariables_EmailText = "You have created a password reset request. Click on the link below to reset you password. If this was not done by you, immediately contact Truefeedback Support. ";
          $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/reset_password/".$user->token;
          $emailVariables_ButtonText = "RESET PASSWORD";

          $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

          $emailContent = $emailTemplate->GenerateEmailTemplate();
          $mail = new Email(true,$emailContent);
          $mail->addAddress($user->email,$user->first_name);
          $mail->Subject = 'TrueFeedback | Password Reset';
          $mail->send();


          return redirect('forgot_password')->with('success', 'You password reset request has been received. You will receive further instructions by email.');

    } else {
          return redirect('forgot_password');
    }

    }
  }





