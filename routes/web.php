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

Route::get('/panel', 'HomeController@index')->name('home');
Route::get('/shop', 'PageController@ideaShop');
Route::get('/', function()
{
    return view('acckt_master.pages.main');
});

Route::get('/acceleration-network',function()
{
    return view('acckt_master.pages.khadamat_shetabdehi');
});

Route::get('/sarmaye', function()
{
    return view('sarmayeh.index');
});

Route::get('/startup', function()
{
    return view('idea.index');
});

Route::get('/register_idea', function()
{
    return view('auth.register_idea');
});

Route::get('/loginsms', function()
{
    return view('auth.loginSms');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/loginsms/checkcode','VerifyController@checkCodeLogin');

Route::middleware(['can:isAdmin'])->prefix('admin')->group(function () {
    Route::get('/profile','UserController@profile');
    Route::get('/user/all','UserController@users');
    Route::get('/user/{user}','UserController@showUser');
});


Route::middleware(['can:isUser'])->prefix('portal')->group(function () {
    Route::get('/profile','UserController@profile');

    //USERS
//    Route::get('/user/amountcapital/create','UserController@amountcapitalCreate');
//    Route::get('/user/venturecapital/create','UserController@venturecapitalCreate');
//    Route::patch('/user/amountcapital/{user}/update','UserController@amountcapitalUpdate');
    Route::patch('/user/venturecapital/{user}/update','UserController@venturecapitalUpdate');
    Route::get('/user/user_further_information','UserController@userFurtherInformationCreate');
    Route::get('/user/social_networks','UserController@socialNetworksCreate');

    Route::resource('user','UserController');
    Route::resource('venturecapital','VenturecapitalController');

    //Idea
    Route::get('/idea','IdeaController@index');
    Route::get('/idea/{idea}','IdeaController@show');
    Route::get('/idea/{idea}/create',"IdeaController@create_demand");


    //Demand
    Route::post('/demand','DemandController@store');
    Route::get('/demand/my','DemandController@my');


    //Verify
    Route::post('/verify/sendCode/tel','VerifyController@sendCodeTel');
    Route::post('/verify/checkCode/tel','VerifyController@checkCodeTel');
    Route::resource('verify','VerifyController');

    //amount capital
    Route::get('/amountcapital/my','AmountcapitalController@my');
    Route::resource('amountcapital','AmountcapitalController');

    //investmentmodel
    Route::resource('investmentmodel',"InvestmentmodelController");

    //change Portal
    Route::get('/change portal/{portal}','HomeController@changePortal');


});






Route::middleware(['can:isIdea'])->prefix('portal_idea')->group(function () {
    //USERS
//    Route::get('/user/amountcapital/create','UserController@amountcapitalCreate');
//    Route::get('/user/venturecapital/create','UserController@venturecapitalCreate');
//    Route::patch('/user/amountcapital/{user}/update','UserController@amountcapitalUpdate');
//    Route::patch('/user/venturecapital/{user}/update','UserController@venturecapitalUpdate');
    Route::get('/user/user_further_information','UserController@userFurtherInformationCreate');
    Route::get('/user/social_networks','UserController@socialNetworksCreate');
    Route::get('/user/change_password','UserController@changePassword')->middleware('password.confirm');
    Route::post('/user/update_password','UserController@updatePassword');
    Route::resource('user','UserController');

    //Idea
    Route::get('/idea/my','IdeaController@myIdea');
    Route::get('/idea/{idea}/demand','IdeaController@showdemand');
    Route::resource('idea','IdeaController');


    //Verify
    Route::post('/verify/sendCode/tel','VerifyController@sendCodeTel');
    Route::post('/verify/checkCode/tel','VerifyController@checkCodeTel');
    Route::resource('verify','VerifyController');


    //change Portal
    Route::get('/change portal/{portal}','HomeController@changePortal');
});

//test
Route::get('/test',function()
{
    return view('acckt_master.pages.panel.index');
});


Route::get('/online-acceleration',function()
{
   return view ('acckt_sarmayeh.pages.online_acceleration');
});
