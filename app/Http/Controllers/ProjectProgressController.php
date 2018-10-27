<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //Projects without schedules
        $projectsWithoutSchedulesIds = DB::table('tblproject')
                                ->select('tblproject.intProjectId')
                                ->leftJoin('tblschedules','tblproject.intProjectId','=','tblschedules.intProjectId')
                                ->where('tblschedules.intProjectId','=',null)
                                ->where('tblproject.strProjectStatus','=','on going')
                                ->get();

        $pendingProjectSchedules = array();
        foreach($projectsWithoutSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->join('tblclient','tblproject.intClientId','=','tblclient.intClientId')
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
            INNER JOIN tblclient ON tblclient.intClientId = tblproject.intClientId
            LEFT JOIN tblschedules ON tblproject.intProjectId = tblschedules.intProjectId
            WHERE tblschedules.intProjectId IS NOT NULL AND tblproject.strProjectStatus = 'on going' AND tblproject.intActive = 1
        ");

        $finishedProjectSchedules = array();
        foreach($projectsWithSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->join('tblclient','tblproject.intClientId','=','tblclient.intClientId')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->first();

            array_push($finishedProjectSchedules,$projectDetails);
        }

        //dd($pendingProjectSchedules);

        //pass to view
        return view ('Engineer/project-progress',compact(
            'pendingProjectSchedules',
            'finishedProjectSchedules'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //dd(request()->all());
        //
        $req = request()->all();

        //dd($req);
        $scheduleIds = array();
        for($i = 0; $i < $req['subCategoriesCount']; $i++){
            //schedule
            $subCategoryId = $req['subCategory'.$i.'id'];
            $startDate = $req['subCategory'.$i.'startDate'];
            $endDate = $req['subCategory'.$i.'endDate'];
            $dependency = $req['subCategory'.$i.'dependency'] == -1 ? null : $scheduleIds[$req['subCategory'.$i.'dependency']];
            

            $scheduleId = DB::table('tblschedules')
                        ->insertGetId([
                            'dtmEstimatedStart' => $startDate,
                            'dtmEstimatedEnd' => $endDate,
                            'dtmActualStart' => $dependency == null ? $startDate : null, //if not dependent, actualStart will be the same as estimated
                            'dtmActualEnd' => null,
                            'intProjectId' => $id,
                            'intWorkSubCategoryId' => $subCategoryId,
                            'intDependencyScheduleId' => $dependency
                        ]);

            array_push($scheduleIds,$scheduleId);

            //schedule phases
            for($j = 0; $j < $req['subCategory'.$i.'phasesCount']; $j++){
                $phaseId = $req['subCategory'.$i.'phase'.$j.'id'];
                $phaseStartDate = $req['subCategory'.$i.'phase'.$j.'startDate'];
                $phaseEndDate = $req['subCategory'.$i.'phase'.$j.'endDate'];

                $schedulePhaseId = DB::table('tblschedulesphases')
                                ->insertGetId([
                                    'dtmEstimatedStart' => $phaseStartDate,
                                    'dtmEstimatedEnd' => $phaseEndDate,
                                    'dtmActualStart' => null,
                                    'dtmActualEnd' => null,
                                    'intProgress' => 0,
                                    'intScheduleId' => $scheduleId,
                                    'intWorkSubCategoryPhasesId' => $phaseId,
                                ]);
            }


        }

        //dd(request()->all());

        //refresh
        header('Refresh:0;/Engineer/Project-Progress');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewSchedule($id){
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

            $projectScheduleWithPhases = (object) [
                'scheduleDetails' => $projectSchedule,
                'schedulePhases' => $projectPhases,
            ];

            array_push($allProjectSchedulesWithPhases, $projectScheduleWithPhases);
            
        }
        

        //dd($allProjectSchedulesWithPhases);
        return view ('Engineer/project-progress-schedule',compact(['allProjectSchedulesWithPhases']));
    }

    public function saveSchedule($id){

        date_default_timezone_set('Asia/Manila');
        //dd(request()->all());

        $req = request()->all();


        $scheduleId = $req['scheduleId'];
        $maxProgress = $req['phasesCount'] * 100;
        $currentProgress = 0;
        
        //get details of schedule
        $scheduleDetails = DB::table('tblschedules')
                        ->where('tblschedules.intScheduleId','=',$scheduleId)
                        ->first();

        for($i = 0; $i < $req['phasesCount']; $i++){
            $schedulePhaseId = $req['schedulePhase'.$i.'id'];
            $schedulePhaseProgress = $req['schedulePhase'.$i.'progress'];
            $schedulePhaseEstimatedStartDate = $req['schedulePhase'.$i.'estimatedStartDate']; //not used
            $schedulePhaseEstimatedEndDate = $req['schedulePhase'.$i.'estimatedEndDate']; //not used
            $schedulePhaseActualStartDate = $req['schedulePhase'.$i.'actualStartDate'];
            $schedulePhaseActualEndDate = $req['schedulePhase'.$i.'actualEndDate'];

            //logic




            //if there's no actualStartDate and the updated progress is greater than 0 (means it started)
            //put actual startDate as of today
            if(
                $schedulePhaseActualStartDate == null &&
                $schedulePhaseProgress > 0
            ){
                $schedulePhaseActualStartDate = date("Y-m-d"); //today's date


                //if schedule still does not have actual start date (meaning not yet started in categ)
                if($scheduleDetails->dtmActualStart == null){
                    DB::table('tblschedules')
                    ->where('tblschedules.intScheduleId','=',$scheduleId)
                    ->update([
                        'dtmActualStart' => date("Y-m-d"), //today's date
                    ]);

                    $scheduleDetails->dtmActualStart = date("Y-m-d"); //today's date //to avoid going inside this function again, assign value
                }
            }

            //if there's no actualEndDate and the updated progress is 100 (means it's completed)
            if(
                $schedulePhaseActualEndDate == null &&
                $schedulePhaseProgress == 100
            ){
                //put actual endDate as of today
                $schedulePhaseActualEndDate = date("Y-m-d"); //today's date
            }



            //updating
            $schedulePhasesId = DB::table('tblschedulesphases')
                        ->where('tblschedulesphases.intSchedulePhasesId','=',$schedulePhaseId)
                        ->update([
                            'intProgress' => $schedulePhaseProgress,
                            'dtmActualStart' => $schedulePhaseActualStartDate,
                            'dtmActualEnd' => $schedulePhaseActualEndDate,
                        ]);


            //for checking if progress is maxed out
            $currentProgress += $schedulePhaseProgress;
        }

        
        //if progress is maxed out, set actualEndDate today
        if($maxProgress == $currentProgress){
            DB::table('tblschedules')
                    ->where('tblschedules.intScheduleId','=',$scheduleId)
                    ->update([
                        'dtmActualEnd' => date("Y-m-d"), //today's date
                    ]);

<<<<<<< HEAD
            
            DB::table('tblschedules')
                ->where('tblschedules.intDependencyScheduleId','=',$scheduleId)
                ->update([
                    'dtmActualStart' => date("Y-m-d"), //today's date
                ]);
            
            
=======

            //if progress of this task is maxed out
            //check if all phases of the project is 100percent, if yes, change project status to 'finished'
            $allProjectPhases = DB::table('tblschedulesphases')
                        ->join('tblschedules','tblschedules.intScheduleId','=','tblschedulesphases.intScheduleId')
                        ->where('tblschedules.intProjectId','=',$id)
                        ->get();

            $isFinished = true;
            foreach($allProjectPhases as $projectPhase){
                if($projectPhase->intProgress != 100){
                    $isFinished = false;
                }
            }

            //if finished, update status
            if($isFinished){
                DB::table('tblproject')
                ->where('tblproject.intProjectId','=',$id)
                ->update([
                    'strProjectStatus' => 'finished',
                ]);
            }
>>>>>>> c87c38836fbe9be482172a3404bab6d1a1020d02
        }



        //TODO check dependencies

        //always last
        //refresh
        header('Refresh:0;/Engineer/Project-Progress/'.$id.'/Schedule');
    }
}
