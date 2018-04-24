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
  return view('login');
});

/**
* Routes - Unauthenticated Users
* @author Tittu Varghese (tittu@servntire.com)
* @param string | route
* @return class,view
*/

Route::group(['middleware' => ['guest']], function() {

  /* Login */
  Route::get('/', function () {
    return view('frontpage');
  });
  Route::get('/login', function () {
    return view('login');
  })->name('login');

  /* Register */
  Route::get('/register', function () {
    return view('register');
  });

  Route::post('/register','UserAuth\RegisterController@create');
  Route::post('/login','UserAuth\LoginController@auth');

});

/**
* Routes - Verification
* @author Tittu Varghese (tittu@servntire.com)
* @param string | route
* @return class,view
*/
Route::get('/verify/email/{email_token}', 'Verify\UserVerification@email');

/**
* Routes - logout
* @author Tittu Varghese (tittu@servntire.com)
* @param none
* @return class,view,login
*/
Route::get('/logout','UserAuth\Logout@logout');

/**
* Routes - Pages
* Role - User
* @author Tittu Varghese (tittu@servntire.com)
* @param string | route
* @return class,view
*/

Route::group(['middleware' => ['role:User','auth']], function() {
  Route::get('/home','Pages\Dashboard@user');
  Route::get('/applicants','Pages\Applicants@user');
  Route::get('/organization','Pages\UserSettings@organization');
  Route::get('/profile','Pages\UserSettings@profile');

  Route::post('/profileImage','Functions\Upload@avatar');
  Route::post('/userprofile','Pages\UserSettings@profileUpdate');
  Route::post('/userpassword','Pages\UserSettings@profilePassword');
  Route::post('/organizationprofile','Pages\UserSettings@organizationUpdate');
});

Route::group(['prefix' => 'business','middleware' => ['role:Business','auth']], function() {
  Route::get('/home','Pages\Dashboard@user');
  Route::get('/applicants','Pages\Applicants@user');
  Route::get('/organization','Pages\UserSettings@organization');
  Route::get('/profile','Pages\UserSettings@profile');

  Route::post('/profileImage','Functions\Upload@avatar');
  Route::post('/userprofile','Pages\UserSettings@profileUpdate');
  Route::post('/userpassword','Pages\UserSettings@profilePassword');
  Route::post('/organizationprofile','Pages\UserSettings@organizationUpdate');
});
