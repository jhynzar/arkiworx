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

Route::get('/', 'LoginController@login1');

Route::post('Login', 'LoginController@login2');

//Route::get('Login', 'LoginController@login2');

Route::get('Forgot-Password', 'LoginController@forgotPass');

//Route::get('404-Error', 'PagesController@home1');

//Admin di pa maayos ung ibang controllers at methods

Route::get('Admin/Home', 'PagesController@home1');

Route::get('Admin/Accounts', 'AccountsController@accounts');

Route::get('Admin/Add-User', 'AccountsController@addusers');

Route::get('Admin/Profile', function(){ 
    return view('Admin/profile');
});

Route::get('Admin/Account-Settings', function(){
    return view('Admin/accountsettings');
});

Route::get('Admin/Cost-Summary', function(){ 
    return view ('Admin/cost summary');
});

Route::get('Admin/Calendar', function(){
    return view ('Admin/calendar');
});

Route::get('Admin/Inbox', function (){
    return view ('Admin/inbox');
});

Route::get('Admin/Projects', 'ProjectsController@index');

Route::post('Admin/Projects','ProjectsController@store');

Route::patch('Admin/Projects/{id}','ProjectsController@update');

Route::get('Admin/Project-Details', function(){
    return view ('Admin/projectdetails');
});

Route::get('Admin/Project-Progress', function(){
    return view ('Admin/projectprogress');
});

//Engineer di pa maayos ung controllers at methods

Route::get('Engineer/Home', function(){
    return view('Engineer/engi-home');
});

Route::get('Engineer/Accounts', function(){
    return view ('Engineer/accounts');
});

Route::get('Engineer/Accounts-Settings', function (){
    return view ('Engineer/account-settings');
});

Route::get('Engineer/Actuals', 'ActualsController@index');

Route::get('Engineer/Cost-Estimation', 'CostEstimationsController@index');
Route::get('Engineer/Cost-Estimation-Computation', function(){
    return view('Engineer/cost-estimation-computation');
});

Route::get('Engineer/Cost-Summary', function(){
    return view('Engineer/cost-summary');
});



Route::get('Engineer/Materials-Pricelist', 'MaterialsController@index');

Route::post('Engineer/Materials-Pricelist/Create', 'MaterialsController@store');

Route::patch('Engineer/Materials-Pricelist/{id}','MaterialsController@update');

Route::get('Engineer/Project-Progress', function(){
    return view ('Engineer/project-progress');
});

Route::get('Engineer/Calendar', function(){
    return view ('Engineer/calendar');
});

Route::get('Engineer/Inbox', function(){
    return view ('Engineer/inbox');
});

//Client