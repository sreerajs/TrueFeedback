<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

use Illuminate\Http\Request;

Route::get('/deploy', 'Deploy\Dev@deploy');
Route::get('/deploy/composer', 'Deploy\Dev@deployComposer');
Route::get('/deploy/migrate', 'Deploy\Dev@deployMigrate');

Route::get('/', function () {
    return view('frontpage');
});
/**
 * Routes - Unauthenticated Users
 * @author Stanly Johnson (stanly.johnson@servntire.com)
 * @param string | route
 * @return class,view
 */
Route::group(['middleware' => ['guest']], function() {
    /* Frontpage */
    Route::get('/', function () {
        return view('frontpage');
    });

    /* Login */
    Route::get('/login', function () {
     return view('login');
    })->name('login');

    /* Register */
    Route::get('/register', function () {
        return view('register');
    });

    /* User Auth Controllers */
    Route::post('/register', 'UserAuth\RegisterController@create');
    Route::post('/login', 'UserAuth\LoginController@auth');
    Route::post('/forgot_password_email', 'UserAuth\ForgotPasswordController@create');

    /**
     * Routes - forgot Password
     * @author Stanly Johnson (stanly.johnson@servntire.com)
     * @param string | route
     * @return class,view, login
     */
    Route::get('/forgot-password', function () {
        return view('forgot_password');
    });

    Route::get('/password-reset/email/{email_token}', 'Verify\UserVerification@emailVerificationPasswordReset');
    Route::post('/forgot-password', 'UserAuth\PasswordResetController@forgotPassword');
    Route::post('/password-reset', 'Verify\UserVerification@passwordReset');
});
/**
 * Routes - Verification
 * @author Stanly Johnson (stanly.johnson@servntire.com)
 * @param string | route
 * @return class,view
 */
Route::get('/verify/email/{email_token}', 'Verify\UserVerification@email');
/**
 * Routes - logout
 * @author Stanly Johnson (stanly.johnson@servntire.com)
 * @param none
 * @return class,view,login
 */
Route::get('/logout', 'UserAuth\Logout@logout');

 
/**
  * Routes - Wallet Pages
  * Role - User
  * @author Stanly Johnson (stanly.johnson@servntire.com)
  * @param string | route
  * @return class,view
  */  
  Route::get('/wallet_menu','Wallet\WalletMenu@setup');
  Route::get('/wallet_import','Wallet\WalletImport@setup');
  Route::get('/wallet_keystore_password','Wallet\WalletKeystore@password');
  Route::get('/wallet_keystore_upload','Wallet\WalletKeystore@upload');
  Route::get('/wallet_success','Wallet\WalletSuccess@complete');
  Route::get('/wallet_privatekey','Wallet\WalletKey@input');
  Route::get('/wallet_create','Wallet\WalletCreate@password');
  //Route::get('/wallet_create_success','Wallet\WalletCreate@success');

  Route::post('/wallet_keystore_password','Wallet\WalletKeystore@passwordSubmit');
  Route::post('/wallet_private_key','Wallet\WalletKey@upload');
  Route::post('/wallet_create','Wallet\WalletCreate@create');
/**



/**
* Routes - Pages
* Role - User
* @author Stanly Johnson (stanly.johnson@servntire.com)
* @param string | route
* @return class,view
*/
Route::group(['middleware' => ['role:User','auth','wallet']], function() {
  Route::get('/home','Pages\Dashboard@user');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::post('/profileImage','Functions\Upload@avatar');
  Route::post('/userprofile','Pages\UserSettings@profileUpdate');
  Route::post('/userpassword','Pages\UserSettings@profilePassword');
  Route::post('/organizationprofile','Pages\UserSettings@organizationUpdate');
  Route::get('/user_rewards','Pages\RewardsController@rewards');
  Route::get('/wallet', 'Pages\WalletController@userWallet');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::get('/surveys','Pages\mySurveys@mysurveys');


   
});

/**
* Routes - Pages
* Role - Business
* @author Stanly Johnson (stanly.johnson@servntire.com)
* @param string | route
* @return class,view
*/
Route::group(['prefix' => 'business','middleware' => ['role:Business','auth','wallet']], function() {
  Route::get('/home','Pages\Dashboard@user');
  Route::get('/organization','Pages\UserSettings@organization');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::get('/mycontract','Pages\UserSettings@profile');
  Route::post('/profileImage','Functions\Upload@avatar');
  Route::post('/userprofile','Pages\UserSettings@profileUpdate');
  Route::post('/userpassword','Pages\UserSettings@profilePassword');
  Route::post('/organizationprofile','Pages\UserSettings@organizationUpdate');
  Route::get('/wallet', 'Pages\WalletController@businessWallet');
  Route::get('/mycontract', 'Pages\myContractController@contract');
  Route::get('/deployed_contracts', 'Pages\DeployedContractsController@contract');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::get('/survey_composer','Pages\SurveyComposerSettings@showComposer');
  Route::post('/savesurvey', function(Request $request) {
    $response['test'] = $request->input('survey_name');
    return json_encode($response);
});
 
  Route::get('/surveyresults', function () {
  return view('surveyresults')->with('dataArray',['uri'=> 'Survey Results','user' => Auth::user()]);
});

});


