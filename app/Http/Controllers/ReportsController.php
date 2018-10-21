<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    //
    public function index(){
        return view('Admin/reports');
    }

    public function projectReports(){
        //====================HIGHEST PAYING
        $allProjects = DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.intActive','=',1)
                    ->get();
        $highestPayingProjects = array();
        foreach($allProjects as $project){
            $projectRequirements = DB::table('tblprojectrequirements')
                                ->where('tblprojectrequirements.intProjectId','=',$project->intProjectId)
                                ->get();
            $projectRequirementsEstimatedTotalCost = 0;
            foreach($projectRequirements as $projReq){
                $projectRequirementsEstimatedTotalCost += $projReq->decEstimatedPrice;
            }

            $projectEstimatedMaterials = DB::table('tblmaterialestimates')
                                ->where('tblmaterialestimates.intProjectId','=',$project->intProjectId)
                                ->get();
            $projectEstimatedMaterialsTotalCost = 0;
            foreach($projectEstimatedMaterials as $projMat){
                $projectEstimatedMaterialsTotalCost += $projMat->decCost;
            }

            $projectTotalCost = $projectRequirementsEstimatedTotalCost + $projectEstimatedMaterialsTotalCost;

            array_push($highestPayingProjects, (object) [
                'projectDetails' => $project,
                'projectTotalCost' => $projectTotalCost,
            ]);
        }

        usort($highestPayingProjects,array($this,"highestProjectTotalCostSort"));
        array_splice($highestPayingProjects,5);//remove everything from index four and up
        //dd($highestPayingProjects);

        //==================HIGHEST PAYING END

        //==================PENDING PROJECTS

        $pendingProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intActive','=',1)
                        ->where(function($query){
                            $query->where('tblproject.strProjectStatus','=','pending')
                                ->orWhere('tblproject.strProjectStatus','=','for approval');
                        })->get();

        //==================PENDING PROJECTS END

        //==================ON GOING PROJECTS

        $ongoingProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.intActive','=',1)
                        ->where('tblproject.strProjectStatus','=','on going')
                        ->get();

        //==================ON GOING PROJECTS END

        //==================FINISHED PROJECTS - YEAR

        $date_now = new \DateTime('today');// add 'today' to reset the clock to start of day

        $date_min = new \DateTime('first day of January'.$date_now->format('Y'));

        $date_next_year = new \DateTime('next year midnight');
        
        $date_max = new \DateTime('first day of January'.$date_next_year->format('Y'));



        //don't check if active or not, regardless it is still a profit if it's finished
        $finishedProjectsYear = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.strProjectStatus','=','finished')//TODO OVERHEAD PROFIT
                        ->where('tblproject.dtmDateFinished','>=',$date_min->format('Y-m-d'))
                        ->where('tblproject.dtmDateFinished','<',$date_max->format('Y-m-d'))
                        ->get();




        //==================FINISHED PROJECTS - YEAR END

        //==================FINISHED PROJECTS - MONTH END

        $date_now_month = new \DateTime('today');// add 'today' to reset the clock to start of day
        $date_min_month = new \DateTime('first day of '.$date_now_month->format('M'));
        $date_max_month = new \DateTime("first day of next month ".$date_now_month->format('M'));

        $finishedProjectsMonth = DB::table('tblproject')
                            ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                            ->where('dtmDateFinished','>=',$date_min_month->format('Y-m-d'))
                            ->where('dtmDateFinished','<',$date_max_month->format('Y-m-d'))
                            ->where('tblproject.strProjectStatus','=','finished')
                            ->get();


        //==================FINISHED PROJECTS - MONTH END

        //==================FINISHED PROJECTS - WEEK

        $date_now = new \DateTime('today');// add 'today' to reset the clock to start of day
        if($date_now->format('l') == 'Monday'){//if today is monday, set today as min
            $date_min = clone($date_now);
        }else{
            $date_min = new \DateTime("last monday");
        }
        $date_max = new \DateTime("next monday");

        $finishedProjectsWeek = DB::table('tblproject')
                            ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                            ->where('dtmDateFinished','>=',$date_min->format('Y-m-d'))
                            ->where('dtmDateFinished','<',$date_max->format('Y-m-d'))
                            ->where('tblproject.strProjectStatus','=','finished')
                            ->get();


        //==================FINISHED PROJECTS - WEEK END

        //==================FINISHED PROJECTS - COMPARISON

        $latestThreeFinishedProjects = DB::table('tblproject')
                            ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                            ->where('tblproject.strProjectStatus','=','finished')
                            ->latest('dtmDateFinished')
                            ->limit(3)
                            ->get();

        $finishedProjectsComparison = array();
        foreach($latestThreeFinishedProjects as $project){
            $projectRequirements = DB::table('tblprojectrequirements')
                                ->where('tblprojectrequirements.intProjectId','=',$project->intProjectId)
                                ->get();
            $projectRequirementsEstimatedTotalCost = 0;
            $projectRequirementsActualTotalCost = 0;
            foreach($projectRequirements as $projReq){
                $projectRequirementsEstimatedTotalCost += $projReq->decEstimatedPrice;
                $projectRequirementsActualTotalCost += $projReq->decActualPrice;
            }

            $projectEstimatedMaterials = DB::table('tblmaterialestimates')
                                ->where('tblmaterialestimates.intProjectId','=',$project->intProjectId)
                                ->get();
            $projectEstimatedMaterialsTotalCost = 0;
            foreach($projectEstimatedMaterials as $projMatEsti){
                $projectEstimatedMaterialsTotalCost += $projMatEsti->decCost;
            }
            $projectActualMaterials = DB::table('tblmaterialactuals')
                            ->where('intProjectId','=',$project->intProjectId)
                            ->get();
            $projectActualMaterialsTotalCost = 0;
            foreach($projectActualMaterials as $projMatActual){
                $materialActualHistory = DB::table('tblmaterialactualshistory')
                                    ->where('intMaterialActualsId','=',$projMatActual->intMaterialActualsId)
                                    ->orderBy('dtmDate','desc')
                                    ->get();
                
                foreach($materialActualHistory as $history){
                    $projectActualMaterialsTotalCost += $history->decCost;
                }
            }

            $projectEstimatedTotalCost = $projectRequirementsEstimatedTotalCost + $projectEstimatedMaterialsTotalCost;
            $projectActualTotalCost = $projectRequirementsActualTotalCost + $projectActualMaterialsTotalCost;

            array_push($finishedProjectsComparison, (object) [
                'projectDetails' => $project,
                'projectEstimatedTotalCost' => $projectEstimatedTotalCost,
                'projectActualTotalCost' => $projectActualTotalCost,
            ]);
        }
        

        //==================FINISHED PROJECTS - COMPARISON

        return view('Admin/reports-projects',compact(
            'highestPayingProjects',
            'pendingProjects',
            'ongoingProjects',
            'finishedProjectsYear',
            'finishedProjectsMonth',
            'finishedProjectsWeek',
            'finishedProjectsComparison'
        ));
    }

    public function costSummaryReport($id){
        //todo
    }

    public function projectPlanReports(){
        //todo
    }

    public function projectScheduleReport($id){
        //todo
    }

    public function materialsPricelistReport($date){
        $dt = new \DateTime($date);
        $dt->modify('+1 day');

        $materials = DB::select(
            '
            SELECT *
            FROM (
                SELECT t.intPriceId , t.decPrice, t.intMaterialId , t.dtmPriceAsOf
                FROM (
                    SELECT intMaterialId, MAX(dtmPriceAsOf) as latestPriceDate
                    FROM tblprice
                    WHERE dtmPriceAsOf <= :date
                    GROUP BY intMaterialId
                ) as r 
                INNER JOIN tblprice t
                ON (t.intMaterialId = r.intMaterialId AND t.dtmPriceAsOf = r.latestPriceDate)
            ) as e
            INNER JOIN tblmaterials f
            ON (e.intMaterialId = f.intMaterialId)
            WHERE f.intActive = 1
            ORDER BY f.strMaterialName ASC
            '
        ,[$dt]);

        //dd($materials);

        return view('Admin/reports-materials-pricelist',compact(
            'materials',
            'date'
        ));
    }
}
