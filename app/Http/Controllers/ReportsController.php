<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    //
    public function index(){
        //================Cost Summary Report
        $costSummaryReportProjectChoices = DB::table('tblproject')
                        ->where('tblproject.intActive','=',1)
                        ->where('tblproject.strProjectStatus','!=','pending')
                        ->get();
        //================Cost Summary Report End

        //================Proj Sched Report

        $projectsWithSchedulesIds = DB::select("
            SELECT DISTINCT tblproject.intProjectId
            FROM tblproject
            LEFT JOIN tblschedules ON tblproject.intProjectId = tblschedules.intProjectId
            WHERE tblschedules.intProjectId IS NOT NULL AND tblproject.intActive = 1
        ");

        $projSchedReportProjectChoices = array();
        foreach($projectsWithSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->first();

            array_push($projSchedReportProjectChoices,$projectDetails);
        }

        //================Proj Sched Report End


        return view('Admin/reports',compact([
            'costSummaryReportProjectChoices',
            'projSchedReportProjectChoices'
        ]));
    }

    //for sorting projectReports
    public function highestProjectTotalCostSort($a , $b){
        if($a->projectTotalCost == $b->projectTotalCost){
            return 0;
        }

        return ($a->projectTotalCost < $b->projectTotalCost) ? 1 : -1;
    }

    public function projectReports(){
        //====================HIGHEST PAYING
        $allProjects = DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.intActive','=',1)
                    ->get();

        //==================DELAYED
        
        $delayedOngoingProjects = array();
        $delayedFinishedProjects = array();
        
        foreach($allProjects as $project){
            $isProjectDelayed = false;

            $projectSchedules = DB::table('tblschedules')
                        ->where('tblschedules.intProjectId','=',$project->intProjectId)
                        ->get();
            foreach($projectSchedules as $schedule){
                $schedulePhases = DB::table('tblschedulesphases')
                            ->where('tblschedulesphases.intScheduleId','=',$schedule->intScheduleId)
                            ->get();

                foreach($schedulePhases as $phase){
                    $today = new \DateTime('today');
                    $estimatedStart = new \DateTime($phase->dtmEstimatedStart);
                    
                    //checker if delayed
                    if($phase->dtmActualStart === null){
                        if($today > $estimatedStart){
                            //delayed = true
                            $isProjectDelayed = true;
                            break;
                        }
                    } else {
                        $actualStart = new \DateTime($phase->dtmActualStart);
                        if($actualStart > $estimatedStart){
                            //delayed = true
                            $isProjectDelayed = true;
                            break;
                        }
                    }
                }
                //checker to see if it is delayed, to terminate checking
                if($isProjectDelayed === true){
                    break;
                }
            }
            //checker if project delayed, push it
            if($isProjectDelayed === true){
                //checker if finished or ongoing project
                if ($project->strProjectStatus === 'on going'){
                    array_push($delayedOngoingProjects,$project);
                } else if($project->strProjectStatus === 'finished'){
                    array_push($delayedFinishedProjects,$project);
                }
            }
        }

        //dd($delayedFinishedProjects);

        //==================DELAYED END

        //==================HIGHEST PAYING
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
            'delayedOngoingProjects',
            'delayedFinishedProjects',
            'finishedProjectsComparison'
        ));
    }

    public function costSummaryReport($id){
        //getting project details
        $project = DB::table('tblproject')
                ->where('intProjectId','=',$id)
                ->where('tblproject.intActive','=',1)
                ->first();
            
        $materialEstimates = DB::table('tblmaterialestimates')
                            ->where('intProjectId','=',$project->intProjectId)
                            ->join('tblmaterials','tblmaterialestimates.intMaterialId','=','tblmaterials.intMaterialId')
                            ->join('tblworksubcategory','tblmaterialestimates.intWorkSubCategoryId','=','tblworksubcategory.intWorkSubCategoryId')
                            ->join('tblworkcategory','tblworkcategory.intWorkCategoryId','=','tblworksubcategory.intWorkCategoryId')
                            ->get()
                            ->toArray();
        $materialActuals = DB::table('tblmaterialactuals')
                            ->join('tblmaterials','tblmaterials.intMaterialId','=','tblmaterialactuals.intMaterialId')
                            ->join('tblworksubcategory','tblmaterialactuals.intWorkSubCategoryId','=','tblworksubcategory.intWorkSubCategoryId')
                            ->join('tblworkcategory','tblworkcategory.intWorkCategoryId','=','tblworksubcategory.intWorkCategoryId')
                            ->where('intProjectId','=',$project->intProjectId)
                            ->get();

        $materialActualsWithHistory = array();
        foreach($materialActuals as $materialActual){
            //for getting latest (only order by, so data can be used in history viewing)
            $materialActualHistory = DB::table('tblmaterialactualshistory')
                                    ->where('intMaterialActualsId','=',$materialActual->intMaterialActualsId)
                                    ->orderBy('dtmDate','desc')
                                    ->get()
                                    ->toArray();

            //computing to totals of material actual
            $materialActualTotalQty = 0;
            $materialActualTotalCost = 0;
            foreach($materialActualHistory as $history){
                $materialActualTotalQty += $history->decQty;
                $materialActualTotalCost += $history->decCost;
            }

            //TODO IF NATAPOS NA
            $materialActualTotals = (object) [
                'totalQty' => $materialActualTotalQty,
                'totalCost' => $materialActualTotalCost,
            ];

            
            $materialActualsDetails = (object) [
                'intMaterialActualsId' => $materialActual->intMaterialActualsId,
                'intMaterialId' => $materialActual->intMaterialId,
                'intProjectId' => $materialActual->intProjectId,
                'intWorkSubCategoryId' => $materialActual->intWorkSubCategoryId,
                'strMaterialName' => $materialActual->strMaterialName,
                'strUnit' => $materialActual->strUnit,
                'intActive' => $materialActual->intActive,
                'strWorkSubCategoryDesc' => $materialActual->strWorkSubCategoryDesc,
                'intWorkCategoryId' => $materialActual->intWorkCategoryId,
                'strWorkCategoryDesc' => $materialActual->strWorkCategoryDesc,
            ];

            $materialActualWithHistory = (object) [
                'materialActualsDetails' => $materialActualsDetails,
                'materialActualsHistory' => $materialActualHistory,
                'materialActualsTotals' => $materialActualTotals,
            ];

            array_push($materialActualsWithHistory,$materialActualWithHistory);
            
        }
        $projectRequirements = DB::table('tblprojectrequirements')
                            ->join('tblworksubcategory','tblprojectrequirements.intWorkSubCategoryId','=','tblworksubcategory.intWorkSubCategoryId')
                            ->join('tblworkcategory','tblworksubcategory.intWorkCategoryId','=','tblworkcategory.intWorkCategoryId')
                            ->where('intProjectId','=',$project->intProjectId)
                            ->get()
                            ->toArray();


        $projectWithDetails = (object) [
            'projectDetails' => $project,
            'materialEstimates' => $materialEstimates,
            'materialActuals' => $materialActualsWithHistory,
            'projectRequirements' => $projectRequirements
        ];

        //-----organizing the data for displaying

        $projectCostSummary = array();
        $projectPartneredEstimates = array();
        $projectPartneredActuals = array();
        foreach($materialEstimates as $keyEstimate=>$estimate){
            foreach($materialActualsWithHistory as $keyActual=>$actual){
                if(
                    $estimate->intMaterialId == $actual->materialActualsDetails->intMaterialId &&
                    $estimate->intWorkCategoryId == $actual->materialActualsDetails->intWorkCategoryId &&
                    $estimate->intWorkSubCategoryId == $actual->materialActualsDetails->intWorkSubCategoryId
                    ){
                    $costSummary = (object) [
                        'estimate' => $estimate,
                        'actual' => $actual
                    ];

                    array_push($projectCostSummary, $costSummary);
                    array_push($projectPartneredEstimates, $keyEstimate); //for identifying lones
                    array_push($projectPartneredActuals, $keyActual); // for identifying lones
                    break;
                }
            }
        }

        //removing of partnered actuals and estimates
        //reverse sorting, so largest index will be the first to be removed. So it won't affect the index of others
        rsort($projectPartneredEstimates);
        rsort($projectPartneredActuals);

        //removing
        foreach($projectPartneredEstimates as $indexToRemove){
            array_splice($materialEstimates,$indexToRemove,1);
        }
        foreach($projectPartneredActuals as $indexToRemove){
            array_splice($materialActualsWithHistory,$indexToRemove,1);

        }

        $projectLoneEstimates = $materialEstimates; //for clarity only
        $projectLoneActuals = $materialActualsWithHistory; //for clarity only

        //pushing of lone actuals and estimates
        /*
        foreach($projectLoneEstimates as $loneEstimate){
            $loneEstimatePush = (object) [
                'estimate' => $loneEstimate,
                'actual' => null,
            ];
            array_push($projectCostSummary,$loneEstimatePush);
        }
        foreach($projectLoneActuals as $loneActual){
            $loneActualPush = (object) [
                'estimate' => null,
                'actual' => $loneActual,
            ];
            array_push($projectCostSummary,$loneActualPush);
        }
        */
        //dd($projectPartneredActuals);
        //dd($projectPartneredEstimates);
        //dd($projectLoneEstimates);
        //dd($projectLoneActuals);
        //dd($projectCostSummary);
        //dd($projectWithDetails);

        //================PROJECT REQUIREMENTS


        //----Extracting project requirements
        $allProjectRequirements = $projectWithDetails->projectRequirements;

        //projectrequirements categories and sub categories

        $projectRequirementsAllWorkCategoriesIds = DB::select("
            SELECT tblworkcategory.intWorkCategoryId
            FROM `tblprojectrequirements`
            INNER JOIN `tblworksubcategory`
            ON (tblprojectrequirements.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblprojectrequirements.intProjectId = :id
            GROUP BY tblworkcategory.intWorkCategoryId
        ",['id'=>$id]);

        $projectRequirementsAllWorkSubCategoriesIds = DB::select("
            SELECT tblworksubcategory.intWorkSubCategoryId
            FROM `tblprojectrequirements`
            INNER JOIN `tblworksubcategory`
            ON (tblprojectrequirements.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblprojectrequirements.intProjectId = :id
            GROUP BY tblworksubcategory.intWorkSubCategoryId
        ",['id'=>$id]);

        // PROJECT REQUIREMENTS WORK CATEGORIES

        $projectRequirementsWorkCategories = array();

        foreach($projectRequirementsAllWorkCategoriesIds as $workCategory){
            $workCategoryDetails = DB::table('tblWorkCategory')
                                ->where('intWorkCategoryId','=',$workCategory->intWorkCategoryId)
                                ->first();

            array_push($projectRequirementsWorkCategories, $workCategoryDetails);
        }

        // Project requirements WORK SUB 
        $projectRequirementsWorkSubCategories = array();
        foreach($projectRequirementsAllWorkSubCategoriesIds as $workSubCategory){
            $workSubCategoryDetails = DB::table('tblWorkSubCategory')
                                ->where('intWorkSubCategoryId','=',$workSubCategory->intWorkSubCategoryId)
                                ->first();

            array_push($projectRequirementsWorkSubCategories,$workSubCategoryDetails);
        }



        //dd($projectRequirementsWorkSubCategories);

        //dd($projectWithDetails);



        //-----For Computation of totals
        $totalEstimatedCost = 0;
        $totalActualsCost = 0;

        //Estimated Materials
        foreach($projectWithDetails->materialEstimates as $estimatedMaterials){
            $totalEstimatedCost += $estimatedMaterials->decCost;
        }
        //Actuals Materials
        foreach($projectWithDetails->materialActuals as $actualMaterials){
            $totalActualsCost += $actualMaterials->materialActualsHistory[0]->decCost;
        }

        //Estimated and Actual Project Requirements
        foreach($projectWithDetails->projectRequirements as $projectRequirement){
            $totalEstimatedCost += $projectRequirement->decEstimatedPrice;
            $totalActualsCost += $projectRequirement->decActualPrice;
        }

        //=======================================================================================================
        //dd($projectLoneActuals);
        //LONE ESTIMATES WORK CATEGORIES AND SUB CATEGS
        $projectLoneActualsWorkCategs = array();
        $projectLoneActualsWorkSubCategs = array();
        foreach($projectLoneActuals as $actual){
            $isWorkDistinct = true;
            foreach($projectLoneActualsWorkCategs as $work){
                if($work->intWorkCategoryId == $actual->materialActualsDetails->intWorkCategoryId){
                    $isWorkDistinct = false;
                    break;
                }
            }
            if($isWorkDistinct){
                $workPush = DB::table('tblworkcategory')
                        ->where('tblworkcategory.intWorkCategoryId','=',$actual->materialActualsDetails->intWorkCategoryId)
                        ->first();
                array_push($projectLoneActualsWorkCategs,$workPush);
            }

            $isWorkSubDistinct = true;
            foreach($projectLoneActualsWorkSubCategs as $workSub){
                if($workSub->intWorkSubCategoryId == $actual->materialActualsDetails->intWorkSubCategoryId){
                    $isWorkSubDistinct = false;
                    break;
                }
            }
            if($isWorkSubDistinct){
                $workSubPush = DB::table('tblworksubcategory')
                        ->where('tblworksubcategory.intWorkSubCategoryId','=',$actual->materialActualsDetails->intWorkSubCategoryId)
                        ->first();
                array_push($projectLoneActualsWorkSubCategs,$workSubPush);
            }
        }

        //dd($projectLoneActualsWorkSubCategs);


        //dd($projectLoneEstimates);
        //LONE ESTIMATES WORK CATEGORIES AND SUB CATEGS
        $projectLoneEstimatesWorkCategs = array();
        $projectLoneEstimatesWorkSubCategs = array();
        foreach($projectLoneEstimates as $estimate){
            $isWorkDistinct = true;
            foreach($projectLoneEstimatesWorkCategs as $work){
                if($work->intWorkCategoryId == $estimate->intWorkCategoryId){
                    $isWorkDistinct = false;
                    break;
                }
            }
            if($isWorkDistinct){
                $workPush = DB::table('tblworkcategory')
                        ->where('tblworkcategory.intWorkCategoryId','=',$estimate->intWorkCategoryId)
                        ->first();
                array_push($projectLoneEstimatesWorkCategs,$workPush);
            }

            $isWorkSubDistinct = true;
            foreach($projectLoneEstimatesWorkSubCategs as $workSub){
                if($workSub->intWorkSubCategoryId == $estimate->intWorkSubCategoryId){
                    $isWorkSubDistinct = false;
                    break;
                }
            }
            if($isWorkSubDistinct){
                $workSubPush = DB::table('tblworksubcategory')
                        ->where('tblworksubcategory.intWorkSubCategoryId','=',$estimate->intWorkSubCategoryId)
                        ->first();
                array_push($projectLoneEstimatesWorkSubCategs,$workSubPush);
            }
        }

        //dd($projectCostSummary);

         //COST SUMMARY WORK CATEGORIES AND SUB CATEGS
         $projectCostSummaryWorkCategs = array();
         $projectCostSummaryWorkSubCategs = array();
         foreach($projectCostSummary as $costSummary){
             $isWorkDistinct = true;
             foreach($projectCostSummaryWorkCategs as $work){
                 if($work->intWorkCategoryId == $costSummary->estimate->intWorkCategoryId){
                     $isWorkDistinct = false;
                     break;
                 }
             }
             if($isWorkDistinct){
                 $workPush = DB::table('tblworkcategory')
                         ->where('tblworkcategory.intWorkCategoryId','=',$costSummary->estimate->intWorkCategoryId)
                         ->first();
                 array_push($projectCostSummaryWorkCategs,$workPush);
             }
 
             $isWorkSubDistinct = true;
             foreach($projectCostSummaryWorkSubCategs as $workSub){
                 if($workSub->intWorkSubCategoryId == $costSummary->estimate->intWorkSubCategoryId){
                     $isWorkSubDistinct = false;
                     break;
                 }
             }
             if($isWorkSubDistinct){
                 $workSubPush = DB::table('tblworksubcategory')
                         ->where('tblworksubcategory.intWorkSubCategoryId','=',$costSummary->estimate->intWorkSubCategoryId)
                         ->first();
                 array_push($projectCostSummaryWorkSubCategs,$workSubPush);
             }
         }
         
         //dd($projectCostSummaryWorkSubCategs);
















        //dd($projectWorkSubCategories);


        //dd($allCategoriesWithSub);

        //dd($projectWorkSubCategories);
        //dd($projectWithDetails);
        //checker
        /*
        foreach($projectCostSummary as $project){
            if($project->actual == null){
                continue;
            }else{
                dd($project);
            }
        }*/
        //dd($projectCostSummary);
        return view('Admin/reports-cost-summary',compact(
            'project',
            'projectCostSummary',
            'projectCostSummaryWorkCategs',
            'projectCostSummaryWorkSubCategs',
            'projectLoneEstimates',
            'projectLoneEstimatesWorkCategs',
            'projectLoneEstimatesWorkSubCategs',
            'allProjectRequirements',
            'projectLoneActuals',
            'projectLoneActualsWorkCategs',
            'projectLoneActualsWorkSubCategs',
            'projectRequirementsWorkCategories',
            'projectRequirementsWorkSubCategories',
            'totalEstimatedCost',
            'totalActualsCost'
        ));
    }

    public function projectPlanReports(){
        //Projects without schedules
        $projectsWithoutSchedulesIds = DB::table('tblproject')
                                ->select('tblproject.intProjectId')
                                ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                                ->leftJoin('tblschedules','tblproject.intProjectId','=','tblschedules.intProjectId')
                                ->where('tblschedules.intProjectId','=',null)
                                ->where('tblproject.strProjectStatus','=','on going')
                                ->where('tblproject.intActive','=',1)
                                ->get();

        $pendingProjectSchedules = array();
        foreach($projectsWithoutSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
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
        ");

        $finishedProjectSchedules = array();
        foreach($projectsWithSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->first();

            array_push($finishedProjectSchedules,$projectDetails);
        }

        //dd($pendingProjectSchedules);

        //pass to view
        return view ('Admin/reports-proj-plan',compact(
            'pendingProjectSchedules',
            'finishedProjectSchedules'
        ));
    }

    public function projectScheduleReport($id){
        $project = DB::table('tblproject')
                        ->where('tblproject.intProjectId','=',$id)
                        ->first();


        $allProjectSchedules = DB::table('tblschedules')
                    ->join('tblworksubcategory','tblschedules.intWorkSubCategoryId','=','tblworksubcategory.intWorkSubCategoryId')
                    ->where('tblschedules.intProjectId','=',$id)
                    ->get();

        $allProjectSchedulesWithPhases = array();
        foreach($allProjectSchedules as $projectSchedule){
            $projectPhases = DB::table('tblschedulesphases')
                    ->join('tblworksubcategoryphases','tblworksubcategoryphases.intWorkSubCategoryPhasesId','=','tblschedulesphases.intWorkSubCategoryPhasesId')
                    ->where('tblschedulesphases.intScheduleId','=',$projectSchedule->intScheduleId)
                    ->get()
                    ->toArray();

            //progress compute
            $overallProgress = 0;
            foreach($projectPhases as $phase){
                //overall progress accumulative adding
                $overallProgress += $phase->intProgress;

                //delay computation
                if($phase->dtmActualStart != null){
                    $estimatedStart = new \DateTime($phase->dtmEstimatedStart);
                    $actualStart = new \DateTime($phase->dtmActualStart);

                    $phase->delayDays = ($actualStart > $estimatedStart) ? date_diff($estimatedStart,$actualStart)->days : 0;
                } else {
                    $phase->delayDays = 0;
                }

                //overdue computation
                if(
                    $phase->dtmActualStart != null &&
                    $phase->dtmActualEnd != null
                ){
                    $estimatedEnd = new \DateTime($phase->dtmEstimatedEnd);
                    $actualEnd = new \DateTime($phase->dtmActualEnd);

                    $scheduleEstimatedDaysRange = date_diff($estimatedStart,$estimatedEnd)->days;
                    $scheduleActualDaysRange = date_diff($actualStart,$actualEnd)->days;

                    $phase->overdueDays = ($scheduleActualDaysRange > $scheduleEstimatedDaysRange) ? $scheduleActualDaysRange - $scheduleEstimatedDaysRange : 0;
                } else {
                    $phase->overdueDays = 0;
                }
                
            }
            //overall progress division by count of progress to get average
            $overallProgress = $overallProgress/count($projectPhases);
            $projectSchedule->overAllProgress = $overallProgress;
            
            //schedule
            //delay computation
            if($projectSchedule->dtmActualStart != null){
                $estimatedStart = new \DateTime($projectSchedule->dtmEstimatedStart);
                $actualStart = new \DateTime($projectSchedule->dtmActualStart);
    
                $projectSchedule->delayDays = ($actualStart > $estimatedStart) ? date_diff($estimatedStart,$actualStart)->days : 0;
            } else {
                $projectSchedule->delayDays = 0;
            }
           

            //overdue computation
            if(
                $projectSchedule->dtmActualStart != null &&
                $projectSchedule->dtmActualEnd != null
            ){
                $estimatedEnd = new \DateTime($projectSchedule->dtmEstimatedEnd);
                $actualEnd = new \DateTime($projectSchedule->dtmActualEnd);

                $scheduleEstimatedDaysRange = date_diff($estimatedStart,$estimatedEnd)->days;
                $scheduleActualDaysRange = date_diff($actualStart,$actualEnd)->days;

                $projectSchedule->overdueDays = ($scheduleActualDaysRange > $scheduleEstimatedDaysRange) ?  $scheduleActualDaysRange - $scheduleEstimatedDaysRange : 0;
            } else {
                $projectSchedule->overdueDays = 0;
            }
            



            $projectScheduleWithPhases = (object) [
                'scheduleDetails' => $projectSchedule,
                'schedulePhases' => $projectPhases,
            ];

            array_push($allProjectSchedulesWithPhases, $projectScheduleWithPhases);
            
        }
        

        //dd($allProjectSchedulesWithPhases);
        return view ('Admin/reports-proj-sched',compact(['allProjectSchedulesWithPhases','project']));
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
