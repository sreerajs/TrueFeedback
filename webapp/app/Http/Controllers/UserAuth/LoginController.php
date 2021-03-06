<?php
/**
 * UserAuth/LoginController
 * BytaCoin - User Login Controller
 * PHP Laravel Version 5.5
 *
 * @author Tittu Varghese (tittu@servntire.com)
 *
 * (c) Servntire Global (servntire.com)
 */

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\UserLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\EntrustFacade as Entrust;
use Illuminate\Notifications\Notifiable;
use App\Notifications\WelcomeNotification;

class LoginController extends Controller
{

  /**
  * User Authentication Table - `users`
  * @author Tittu Varghese (tittu@servntire.com)
  *
  * @param  Request | $request
  * @return array | $error_message
  * @return redirect | login | dashboard
  */

    protected function auth(Request $request) {
      $user = new UserLogin;
      $user->email = $request->get('email_address');
      $user->password = $request->get('password');

      /* Validation Rules */
      $ValidationRules = [
        'email_address' => 'required|email|exists:mysql.users,email',
        'password' => 'required|min:8'
      ];
      /* Error Messages */
      $ErrorMessages = [
        'email_address.exists' => 'The account is not exist in our system',
        'password.min' => 'Please enter a valid password.'
      ];

      /* Validation */
      $this->validate($request, $ValidationRules, $ErrorMessages);

      $userCredentials['email'] = $user->email;
      $userCredentials['password'] = $user->password;

      /* Making Authentication Request */
      if(Auth::attempt($userCredentials))
  		{
          /* If Auth true */
          $user = Auth::user();

          auth()->user()->notify(new WelcomeNotification());
          
          if((!$user->is_wallet_linked) && (!$user->account_type = "Admin"))
          {
            return view('Wallet/wallet_menu')->with('error', 'Please link your wallet to continue');
          }        
                    
                  
          if (Entrust::hasRole('User')) {             
              return redirect('/home');
          } 
          else if (Entrust::hasRole('Business')) {
              return redirect('/business/home');
          }
          else if (Entrust::hasRole('admin')) {
            return redirect('/admin/home');
          }
                
          return redirect('/home');

      } else {

        /* If Auth false */
        return redirect("login")->with('failed_login', 'Invalid email address or password.');

      }

      return redirect('login');
    }

  protected function verify(Request $request) {
      
      if($user = Auth::user())
      {
        if(!$user->is_wallet_linked)
          {
            return view('Wallet/wallet_menu')->with('error', 'Please link your wallet to continue');
          } 
          
        else
          {
                if (Entrust::hasRole('User')) {             
                  return redirect('/home');
                } 
              else if (Entrust::hasRole('Business')) {
                  return redirect('/business/home');
                }
                else if (Entrust::hasRole('admin')) {
                  return redirect('/admin/home');
                }
          }  
      }

      else
      {
        return view ('login');
      }



    }



}
