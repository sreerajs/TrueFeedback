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
Route::get('/deploy','Deploy\Dev@deploy');
Route::get('/deploy/composer','Deploy\Dev@deployComposer');
Route::get('/deploy/migrate','Deploy\Dev@deployMigrate');
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

  /*Forgot Password */
  Route::get('/forgot_password', function() {
    return view('forgot_password');
  });

  /* User Auth Controllers */
  Route::post('/register','UserAuth\RegisterController@create');
  Route::post('/login','UserAuth\LoginController@auth');
  Route::post('/forgot_password_email', 'UserAuth\ForgotPasswordController@create');
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
Route::get('/logout','UserAuth\Logout@logout');

/**
* Routes - Pages
* Role - User
* @author Stanly Johnson (stanly.johnson@servntire.com)
* @param string | route
* @return class,view
*/
Route::group(['middleware' => ['role:User','auth']], function() {
  Route::get('/home','Pages\Dashboard@user');
  Route::get('/organization','Pages\UserSettings@organization');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::post('/profileImage','Functions\Upload@avatar');
  Route::post('/userprofile','Pages\UserSettings@profileUpdate');
  Route::post('/userpassword','Pages\UserSettings@profilePassword');
  Route::post('/organizationprofile','Pages\UserSettings@organizationUpdate');
  Route::get('/user_rewards','Pages\RewardsController@rewards');
  Route::get('/wallet', 'Pages\WalletController@userWallet');
  Route::get('/profile','Pages\UserSettings@profile');
  Route::get('/mysurveys','Pages\mySurveys@mysurveys');
});

/**
* Routes - Pages
* Role - Business
* @author Stanly Johnson (stanly.johnson@servntire.com)
* @param string | route
* @return class,view
*/
Route::group(['prefix' => 'business','middleware' => ['role:Business','auth']], function() {
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
});