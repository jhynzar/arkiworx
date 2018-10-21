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

Route::get('/', 'LoginController@index');

Route::post('Login', 'LoginController@login');

Route::get('Forgot-Password', 'LoginController@forgotPass');

Route::get('Check-Login',function(){
    dd(Auth::user());
});

Route::get('Logout',function(){

    Auth::logout();//logout user
    session()->flush();//delete session data
    
    return redirect('/')->withErrors(['You have been logged out.']);
});

//Route::get('404-Error', 'PagesController@home1');

//Admin di pa maayos ung ibang controllers at methods

Route::middleware(['auth'])->group(function(){

    //===========Admin

    Route::middleware(['check.if.admin'])->group(function(){
        Route::get('Admin/Home', 'AdminHomeController@index');

        Route::get('Admin/Accounts', 'AccountsController@accounts');

        Route::post('Admin/Accounts/{id}/Delete', 'AccountsController@delete');

        Route::post('Admin/Add-User', 'AccountsController@addusers');

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

        Route::patch('Admin/Projects/{id}','ProjectsController@update'); //change from approval to finished

        Route::post('Admin/Projects/{id}/Delete','ProjectsController@delete'); //change from approval to finished

        Route::get('Admin/Projects/{id}','ProjectsController@show'); //show project details

        Route::post('Admin/Projects/{id}/Update','ProjectsController@updateDetails'); //update project details

        Route::get('Admin/Projects/{id}/Cost-Summary','ProjectsController@viewCostSummary'); //view cost summary

        Route::get('Admin/Projects/{id}/Cost-Esti-Report','ProjectsController@showCostEstiReport'); //show cost esti report

        Route::get('Admin/Projects/{id}/Cost-Summary/Reports','ProjectsController@viewCostSummaryReports'); //view cost summary reports

        Route::get('Admin/Projects/{id}/Progress-Schedule','ProjectsController@viewProgressSchedule'); //view progress


        //reports

        
        
        Route::get('Admin/Reports','ReportsController@index');

        Route::get('Admin/Reports/Project','ReportsController@projectReports');

        Route::get('Admin/Reports/Cost-Summary/{id}','ReportsController@costSummaryReport');
        
        Route::get('Admin/Reports/Materials-Pricelist/{date}','ReportsController@materialsPricelistReport');

        Route::get('Admin/Reports/Project-Plan','ReportsController@projectPlanReports');

       

        //reports end

        Route::get('Admin/Project-Details', function(){
            return view ('Admin/projectdetails');
        });

        Route::get('Admin/Project-Progress', 'AdminProjectProgressController@index');
    });

    //==============Admin end

    //==============Engineer

    Route::middleware(['check.if.engineer'])->group(function(){

         //Engineer di pa maayos ung controllers at methods

        Route::get('Engineer/Home', 'EngineerHomeController@index');

        Route::get('Engineer/Engineer-Projects','EngineerProjectsController@index');

        Route::get('/Engineer/Engineer-Projects/{id}/Cost-Summary','CostSummaryController@index');

        Route::get('/Engineer/Engineer-Projects/{id}/Actuals','ActualsController@index');
        //creating actuals
        Route::post('/Engineer/Engineer-Projects/{id}/Actuals/createMaterialActualNew','ActualsController@createMaterialActualNew');
        Route::post('/Engineer/Engineer-Projects/{id}/Actuals/createMaterialActualFrom','ActualsController@createMaterialActualFrom');
        Route::post('/Engineer/Engineer-Projects/{id}/Actuals/updateProjectRequirementActual','ActualsController@updateProjectRequirementActual');
        Route::post('/Engineer/Engineer-Projects/{id}/Actuals/updateMaterialActual','ActualsController@updateMaterialActual');

        Route::get('Engineer/Accounts', function(){
            return view ('Engineer/accounts');
        });
        
        Route::get('Engineer/Reports',function(){
            return view('engineer/reports');
        });

        Route::get('Engineer/Accounts-Settings', function (){
            return view ('Engineer/account-settings');
        });

        Route::get('Engineer/Project-Progress/Materials-Usage', function(){
            return view ('Engineer/project-progress-materials');
        });











        Route::get('Engineer/Cost-Estimation', 'CostEstimationsController@index');
        Route::get('Engineer/Cost-Estimation/{id}/Cost-Estimation-Computation/{projectTemplateId}', 'CostEstimationsController@createEstimation');
        Route::get('Engineer/Cost-Estimation/{id}/Cost-Estimation-Computation-2/{projectTemplateId}', 'CostEstimationsController@createEstimation2');
        Route::post('Engineer/Cost-Estimation/{id}/Cost-Estimation-Computation/Cost-Estimation-Save', 'CostEstimationsController@saveEstimation');

        Route::get('Engineer/Cost-Summary', function(){
            return view('Engineer/cost-summary');
        });



        Route::get('Engineer/Materials-Pricelist', 'MaterialsController@index');

        Route::post('Engineer/Materials-Pricelist/Create', 'MaterialsController@store');

        Route::patch('Engineer/Materials-Pricelist/{id}','MaterialsController@update');

        Route::get('Engineer/Project-Progress', 'ProjectProgressController@index');

        Route::get('Engineer/Project-Progress/{id}/Schedule', 'ProjectProgressController@viewSchedule');

        Route::post('Engineer/Project-Progress/{id}', 'ProjectProgressController@store');

        Route::post('Engineer/Project-Progress/{id}/Schedule/Save', 'ProjectProgressController@saveSchedule');

        Route::get('Engineer/Calendar', function(){
            return view ('Engineer/calendar');
        });

        Route::get('Engineer/Inbox', function(){
            return view ('Engineer/inbox');
        });
    });

    //=========Engineer end
    

   
});



//Client