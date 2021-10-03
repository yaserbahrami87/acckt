<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['can:isUser'])->prefix('panel')->group(function () {
    Route::get('/profile','UserController@profile');

    //USERS
    Route::resource('user','UserController');

    //Verify
    Route::post('/verify/sendCode/tel','VerifyController@sendCodeTel');
    Route::post('/verify/checkCode/tel','VerifyController@checkCodeTel');
    Route::resource('verify','VerifyController');

    //amount capital
    Route::resource('amountcapital','AmountcapitalController');
});
