<?php
/**
* UserAuth/RegisterController
* BytaCoin - User Register Controller
* PHP Laravel Version 5.5
*
* @author Tittu Varghese (tittu@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Http\Controllers\UserAuth;
//use App\Models\UserRegister;
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


class RegisterController extends Controller
{

  /**
  * Insert User Data in to the User Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | register
  */

  protected function create(Request $request) {
    $user = new User;
    $hashids = new Hashids($request->get('email_address'),9);
    $user->user_id = $hashids->encode(rand(1,9999));
    $user->first_name = $request->get('first_name');
    $user->last_name = $request->get('last_name');
    $user->account_type = $request->get('account_type');
    $user->country = $request->get('country');
    $user->email = $request->get('email_address');
    if($request->get('password') == $request->get('password_confirmation')) {
      $user->password = bcrypt($request->get('password'));
    }
    /* User Email Verification Token */
    $hashidSalt = "UserLoginParameterEncryptionCode".$user->first_name.$user->email;
    $hashids = new Hashids($hashidSalt,25);
    $user->verification_token = $hashids->encode(rand(11,999));


    /* Validation Rules */
    $ValidationRules = [
      'first_name' => 'required|min:1|max:40',
      'last_name' => 'required|min:1|max:40',
      'account_type' => 'required',
      'email_address' => 'required|email|unique:mysql.users,email',
      'password' => 'required|min:8|max:30|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed'
    ];

    /* Error Messages */
    $ErrorMessages = [
      'first_name.required' => 'Please enter a valid first name',
      'last_name.required' => 'Please enter a valid last name',
      'email_address.required' => 'Please enter a valid email address',
      'email_address.unique' => 'The account is already exists in our system',
      'password.min' => 'Please enter a valid password',
      'password.regex' => 'Please enter a secure password - contains an upper case letter, a lower case letter, a digit and a special character',
      'password.confirmed' => 'Passwords are not matching'
    ];

    /* Validation */
    $this->validate($request, $ValidationRules, $ErrorMessages);

    /* Inserting to Database */
    if($user->save()) {

      /**
      * Attaching User Role to the User
      * @author Tittu Varghese (tittu@servntire.com)
      */

      $role = DB::table('roles')->where('name','=',$user->account_type)->first();
      $user->attachRole($role->id);

      /**
      * Sending verification email to the user
      * @author Tittu Varghese (tittu@servntire.com)
      *
      * @param  array | $user
      */

      $emailVariables_UserName = $user->first_name;
      $emailVariables_SubTitle = "Thanks for registering!";
      $emailVariables_MainTitle = "Complete your registration";
      $emailVariables_EmailText = "We would like to make sure we have the correct email address (".$user->email.") for completion of the registration process, please verify your email using the verification button below.";
      $emailVariables_ButtonLink = "https://bytacoin.telrpay.com/verify/email/".$user->verification_token;
      $emailVariables_ButtonText = "VERIFY EMAIL";

      $emailTemplate = new EmailTemplates($emailVariables_UserName,$emailVariables_SubTitle,$emailVariables_MainTitle,$emailVariables_EmailText,$emailVariables_ButtonLink,$emailVariables_ButtonText);

      $emailContent = $emailTemplate->GenerateEmailTemplate();
      $mail = new Email(true,$emailContent);
      $mail->addAddress($user->email,$user->first_name);
      $mail->Subject = 'Activate your account at TrueFeedback';
      $mail->send();


      return redirect('login')->with('success', 'Your account has been created. Please validate your email address at the earliest.');

    } else {
      return redirect('register');
    }

  }
}
