<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EngineerHomeController extends Controller
{
    //
    public function index(){
        $pendingProjectCostEstimations = 
                    DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                    ->where('tblproject.strProjectStatus','=','pending')
                    ->where('tblproject.intActive','=',1)
                    ->orderBy('tblproject.intProjectId','desc')
                    ->get();

                    

        $ongoingProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                        ->where('tblproject.strProjectStatus','=','on going')
                        ->where('tblproject.intActive','=',1)
                        ->orderBy('tblproject.intProjectId','desc')
                        ->get();

                        
        /*
        //don't check if active, because regardless, it is still a finished project
        $finishedProjectsCount = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                        ->where('tblproject.strProjectStatus','=','finished')
                        ->count();

        */



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

        //=================================project plans
        //Projects without schedules
        $projectsWithoutSchedulesIds = DB::table('tblproject')
                                ->select('tblproject.intProjectId')
                                ->leftJoin('tblschedules','tblproject.intProjectId','=','tblschedules.intProjectId')
                                ->where('tblschedules.intProjectId','=',null)
                                ->where('tblproject.strProjectStatus','=','on going')
                                ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                                ->where('tblproject.intActive','=',1)
                                ->get();

        $pendingProjectSchedules = array();
        foreach($projectsWithoutSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->where('tblproject.intEmployeeId','=',Auth::user()->id)//EMPLOYEE ID
                            ->first();

            $projectRequirementsWorkSubCategoryIds = DB::select("
                SELECT tblprojectrequirements.intWorkSubCategoryId
                FROM tblprojectrequirements
                WHERE tblprojectrequirements.intProjectId = :id
                GROUP BY tblprojectrequirements.intWorkSubCategoryId
            ",[$projectId->intProjectId]);

            $materialsWorkSubCategoryIds = DB::select("
                SELECT tblmaterialestimates.intWorkSubCategoryId
                FROM tblmaterialestimates
                WHERE tblmaterialestimates.intProjectId = :id
                GROUP BY tblmaterialestimates.intWorkSubCategoryId
            ",[$projectId->intProjectId]);
            
            $projectWorkSubCategoryIds = array_merge($projectRequirementsWorkSubCategoryIds,$materialsWorkSubCategoryIds);

            $projectWorkSubCategories = array();
            foreach($projectWorkSubCategoryIds as $workSubCategoryId){
                $workSubCategoryDetails = DB::table('tblworksubcategory')
                                        ->where('tblworksubcategory.intWorkSubCategoryId','=',$workSubCategoryId->intWorkSubCategoryId)
                                        ->first();
                
                $workSubCategoryPhases = DB::table('tblworksubcategoryphases')
                                        ->where('tblworksubcategoryphases.intWorkSubCategoryId','=',$workSubCategoryId->intWorkSubCategoryId)
                                        ->get()
                                        ->toArray();

                array_push($projectWorkSubCategories,(object) [
                    'workSubCategoryDetails' => $workSubCategoryDetails,
                    'workSubCategoryPhases' => $workSubCategoryPhases,
                ]);
            }

            $project = (object) [
                'projectDetails' => $projectDetails,
                'projectWorkSubCategories' => $projectWorkSubCategories
            ];

            array_push($pendingProjectSchedules,$project);
        }
        //dd($pendingProjectSchedules);

        //Projects with schedules

        $projectsWithSchedulesIds = DB::select("
            SELECT DISTINCT tblproject.intProjectId
            FROM tblproject
            LEFT JOIN tblschedules ON tblproject.intProjectId = tblschedules.intProjectId
            WHERE tblschedules.intProjectId IS NOT NULL AND tblproject.strProjectStatus = 'on going' AND tblproject.intActive = 1
            AND tblproject.intEmployeeId = :id
        ",[Auth::user()->id]);

        $finishedProjectSchedules = array();
        foreach($projectsWithSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->first();

            array_push($finishedProjectSchedules,$projectDetails);
        }

        //dd($pendingProjectSchedules);

        $projectPlans = (object) [
            'pendingProjectSchedules' => $pendingProjectSchedules,
            'finishedProjectSchedules' => $finishedProjectSchedules
        ];


        //=====================================project plans end

        $display = (object) [
            'pendingCostEstimations' => $pendingProjectCostEstimations,
            'ongoingProjects' => $ongoingProjects,
            'updatedMaterialPricesCount'=> $updatedMaterialPricesCount,
            'projectPlans' => $projectPlans
        ];

        //dd($display);

        return view('Engineer/engi-home',compact(
            'display'
        ));
    }
}
