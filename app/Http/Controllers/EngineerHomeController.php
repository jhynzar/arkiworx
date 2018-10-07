<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EngineerHomeController extends Controller
{
    //
    public function index(){
        $pendingProjectCostEstimationsCount = 
                    DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                    ->where('tblproject.strProjectStatus','=','pending')
                    ->where('tblproject.intActive','=',1)
                    ->orderBy('tblproject.intProjectId','desc')
                    ->count();

                    

        $ongoingProjectsCount = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                        ->where('tblproject.strProjectStatus','=','ongoing')
                        ->where('tblproject.intActive','=',1)
                        ->orderBy('tblproject.intProjectId','desc')
                        ->count();

                        

        $finishedProjectsCount = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                        ->where('tblproject.strProjectStatus','=','finished')
                        ->count();



        //====for updated materials this week
        $date_now = new \DateTime('today');// add 'today' to reset the clock to start of day

        if($date_now->format('l') == 'Monday'){//if today is monday, set today as min
            $date_min = clone($date_now);
        }else{
            $date_min = new \DateTime("last monday");
        }

        $date_max = new \DateTime("next monday");

        $updatedMaterialPricesCount = DB::table('tblprice')
                        ->where('tblprice.dtmPriceAsOf','>=',$date_min->format('Y-m-d'))
                        ->where('tblprice.dtmPriceAsOf','<',$date_max->format('Y-m-d'))
                        ->count();

        //====updated materials end

        $counts = (object) [
            'pendingCostEstimationsCount' => $pendingProjectCostEstimationsCount,
            'ongoingProjectsCount' => $ongoingProjectsCount,
            'finishedProjectsCount' => $finishedProjectsCount,
            'updatedMaterialPricesCount'=> $updatedMaterialPricesCount
        ];

        //dd($counts);

        return view('Engineer/engi-home',compact(
            'counts'
        ));
    }
}
