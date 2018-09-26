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
                array_push($projectWorkSubCategories, $workSubCategoryDetails);
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
        //
        $req = request()->all();

        //dd($req);
        $activitiesIds = array();
        for($x = 0; $x < $req['activitiesCount']; $x++){
            $subCategoryId = $req['subCategoryId'.$x];
            $startDate = $req['startDate'.$x];
            $endDate = $req['endDate'.$x];
            $dependency = $req['dependency'.$x] == -1 ? null : $activitiesIds[$req['dependency'.$x]];

            $activityId = DB::table('tblschedules')
                        ->insertGetId([
                            'dtmEstimatedStart' => $startDate,
                            'dtmEstimatedEnd' => $endDate,
                            'dtmActualStart' => null,
                            'dtmActualEnd' => null,
                            'intProjectId' => $id,
                            'intWorkSubCategoryId' => $subCategoryId,
                            'intDependencyScheduleId' => $dependency
                        ]);
            
            array_push($activitiesIds,$activityId);
        }

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
        //dd(request()->all());

        $req = request()->all();

        for($x = 0; $x < $req['phasesCount']; $x++){
            $schedulePhaseId = $req['schedulePhaseId'.$x];
            $schedulePhaseProgress = $req['schedulePhaseProgress'.$x];

            $activityId = DB::table('tblschedulesphases')
                        ->where('tblschedulesphases.intSchedulePhasesId','=',$schedulePhaseId)
                        ->update([
                            'intProgress' => $schedulePhaseProgress,
                        ]);

            //TODO
        }
    }
}
