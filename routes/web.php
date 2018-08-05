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

//Route::get('Admin/Profile', 'AccountsController@profile');

//Route::get('Admin/Account-Settings', 'PagesController@home1');

//Route::get('Admin/Cost-Summary', 'PagesController@home1');

//Route::get('Admin/Inbox', 'PagesController@home1');

Route::get('Admin/Project', function(){
    return view('Admin/project');
});

//Route::get('Admin/Project-Details', 'PagesController@home1');

//Route::get('Admin/Project-Progress', 'PagesController@home1');

//Engineer di pa maayos ung controllers at methods

//Route::get('Engineer/Accounts', 'PagesController@home1');

//Route::get('Engineer/Accounts-Settings', 'PagesController@home1');

Route::get('Engineer/Actuals', function(){
    return view('Engineer/actuals');
});

Route::get('Engineer/Cost-Estimation', function(){
    return view('Engineer/cost-estimation');
});

//Route::get('Engineer/Cost-Summary', 'PagesController@home1');

Route::get('Engineer/Home', function(){
    return view('Engineer/engi-home');
});

Route::get('Engineer/Materials-Pricelist', 'MaterialsController@index');

Route::post('Engineer/Materials-Pricelist/Create', 'MaterialsController@store');

Route::patch('Engineer/Materials-Pricelist/{id}','MaterialsController@update');

//Route::get('Engineer/Project-Progress', 'PagesController@home1');

//Client