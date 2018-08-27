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
                                ->get();

        $pendingProjectSchedules = array();
        foreach($projectsWithoutSchedulesIds as $projectId){
            $projectDetails = DB::table('tblproject')
                            ->join('tblclient','tblproject.intClientId','=','tblclient.intClientId')
                            ->where('tblproject.intProjectId','=',$projectId->intProjectId)
                            ->where('tblproject.intActive','=',1)
                            ->first();

            array_push($pendingProjectSchedules,$projectDetails);
        }
        

        //Projects with schedules

        $projectsWithSchedulesIds = DB::select("
            SELECT DISTINCT tblproject.intProjectId
            FROM tblproject
            INNER JOIN tblclient ON tblclient.intClientId = tblproject.intClientId
            LEFT JOIN tblschedules ON tblproject.intProjectId = tblschedules.intProjectId
            WHERE tblschedules.intProjectId IS NOT NULL AND tblproject.intActive = 1
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



        //Return
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
    public function store(Request $request)
    {
        //
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
}
