<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    //
    public function index(){
        /*
        $pendingProjectCostEstimationsCount = 
                    DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.strProjectStatus','=','pending')
                    ->where('tblproject.intActive','=',1)
                    ->orderBy('tblproject.intProjectId','desc')
                    ->count();

                    

        $ongoingProjectsCount = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.strProjectStatus','=','ongoing')
                        ->where('tblproject.intActive','=',1)
                        ->orderBy('tblproject.intProjectId','desc')
                        ->count();

                        
        //don't check if active, because regardless, it is still a finished project
        $finishedProjectsCount = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.strProjectStatus','=','finished')
                        ->count();






        //====profits of this year
        $date_now = new \DateTime('today');// add 'today' to reset the clock to start of day

        $date_min = new \DateTime('first day of January'.$date_now->format('Y'));

        $date_next_year = new \DateTime('next year midnight');
        
        $date_max = new \DateTime('first day of January'.$date_next_year->format('Y'));



        //don't check if active or not, regardless it is still a profit if it's finished
        $projectsFinishedThisYear = DB::table('tblproject')
                        ->join('tblprojectrequirements','tblproject.intProjectId','=','tblprojectrequirements.intProjectId')
                        ->where('tblproject.strProjectStatus','=','finished')//TODO OVERHEAD PROFIT
                        ->where('tblproject.dtmDateFinished','>=',$date_min->format('Y-m-d'))
                        ->where('tblproject.dtmDateFinished','<',$date_max->format('Y-m-d'))
                        ->where('tblprojectrequirements.strDesc','=','OverheadProfit')//TODO OVERHEAD PROFIT
                        ->get();

        //profits computation
        $profitsThisYear = 0;
        foreach($projectsFinishedThisYear as $project){
            $profitsThisYear += $project->decActualPrice;
        }

        //dd($profitsThisYear);

        //====updated materials end

        $display = (object) [
            'pendingCostEstimationsCount' => $pendingProjectCostEstimationsCount,
            'ongoingProjectsCount' => $ongoingProjectsCount,
            'finishedProjectsCount' => $finishedProjectsCount,
            'profitsThisYear'=> $profitsThisYear
        ];

        //dd($display);

        */

        $pendingProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where(function ($query){
                            $query->where('tblproject.strProjectStatus','=','pending')
                                ->orWhere('tblproject.strProjectStatus','=','for approval');
                        })
                        ->where('tblproject.intActive','=',1)
                        ->get();

        $ongoingProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.strProjectStatus','=','on going')
                        ->where('tblproject.intActive','=',1)
                        ->get();

                        
        //don't check if active, because regardless, it is still a finished project
        $finishedProjects = DB::table('tblproject')
                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                        ->where('tblproject.strProjectStatus','=','finished')
                        ->get();

        //==================HIGHEST PAYING
        $allProjects = DB::table('tblproject')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where(function($query){
                        $query->where('tblproject.intActive','=',1)
                            ->orWhere('tblproject.strProjectStatus','=','finished');
                    })
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


        $display = (object) [
            'pendingProjects' => $pendingProjects,
            'ongoingProjects' => $ongoingProjects,
            'finishedProjects' => $finishedProjects,
            'highestPayingProjects' => $highestPayingProjects
        ];

        //dd($display);
        return view('Admin/admin-home',compact(
            'display'
        ));
    }

    //for sorting projectReports
    public function highestProjectTotalCostSort($a , $b){
        if($a->projectTotalCost == $b->projectTotalCost){
            return 0;
        }

        return ($a->projectTotalCost < $b->projectTotalCost) ? 1 : -1;
    }
}
