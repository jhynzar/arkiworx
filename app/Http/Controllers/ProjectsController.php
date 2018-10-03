<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendingProjects = DB::select("
        SELECT *
        FROM tblproject
        INNER JOIN tblclient
        ON (tblproject.intClientId = tblclient.intClientId)
        INNER JOIN tblemployee
        ON (tblproject.intEmployeeId = tblemployee.intEmployeeId)
        WHERE (tblproject.intActive = 1) AND
        (tblproject.strProjectStatus = 'pending' OR tblproject.strProjectStatus = 'for approval')
        ");
        
        $ongoingProjects = DB::select("
            
        SELECT *
        FROM tblproject
        INNER JOIN tblclient
        ON (tblproject.intClientId = tblclient.intClientId)
        INNER JOIN tblemployee
        ON (tblproject.intEmployeeId = tblemployee.intEmployeeId)
        WHERE (tblproject.intActive = 1) AND
        (tblproject.strProjectStatus = 'on going')
        
        ");

        $finishedProjects = DB::select("
        
        SELECT *
        FROM tblproject
        INNER JOIN tblclient
        ON (tblproject.intClientId = tblclient.intClientId)
        INNER JOIN tblemployee
        ON (tblproject.intEmployeeId = tblemployee.intEmployeeId)
        WHERE (tblproject.intActive = 1) AND
        (tblproject.strProjectStatus = 'finished')
        
        ");

        //getting the totalEstimatedCost of a pending project

        $pendingProjectsWithTotalEstimatedCost = array();
        
        foreach($pendingProjects as $project){
            $projectTotalEstimatedCost = 0;

            $allEstimatedMaterials = DB::table('tblmaterialestimates')
                                ->where('tblmaterialestimates.intProjectId','=',$project->intProjectId)
                                ->get();

            foreach($allEstimatedMaterials as $estimatedMaterial){
                $projectTotalEstimatedCost += $estimatedMaterial->decCost;
            }

            $allProjectRequirements = DB::table('tblprojectrequirements')
                                ->where('tblprojectrequirements.intProjectId','=',$project->intProjectId)
                                ->get();

            foreach($allProjectRequirements as $projectRequirement){
                $projectTotalEstimatedCost += $projectRequirement->decEstimatedPrice;
            }

            $projectWithEstimatedCost = (object) [
                'projectDetails' => $project,
                'totalEstimatedCost' => $projectTotalEstimatedCost
            ];

            array_push($pendingProjectsWithTotalEstimatedCost,$projectWithEstimatedCost);
        }

        //dd($pendingProjectsWithTotalEstimatedCost);

        //For Add New Project

        $clients = DB::table('tblclient')->get();

        $engineers = DB::table('tblaccounts')
                    ->join('tblemployee','tblaccounts.intAccountId','=','tblemployee.intAccountId')
                    ->where('tblaccounts.strUserType','=','engineer')
                    ->get();


        return view('Admin/projects',compact('pendingProjectsWithTotalEstimatedCost','ongoingProjects','finishedProjects','clients','engineers'));
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
        //dd(request()->all());
        $req = request()->all();

        DB::table('tblproject')
            ->insertGetId(
                [
                    'strProjectName' => $req['projectName'],
                    'txtProjectDesc' => $req['projectDesc'],
                    'strProjectStatus' => 'pending',
                    'strProjectLocation' => $req['projectLocation'],
                    'intClientId' => $req['projectClient'],
                    'intEmployeeId' => $req['projectEngineer'],
                    'intActive' => 1
                ]
            );

        header('Refresh:0;/Admin/Projects');
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
        $projectDetails = DB::table('tblproject')
                ->join('tblclient','tblclient.intClientId','=','tblproject.intClientId')
                ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                ->where('tblproject.intProjectId','=',$id)
                ->first();

        //dd($projectDetails);
        return view('Admin/projectdetails',compact(
            'projectDetails'
        ));
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
        //change from for approval to finished
        DB::table('tblproject')
            ->where('intProjectId','=',$id)
            ->update(['strProjectStatus'=> 'on going']);

            header('Refresh:0;/Admin/Projects');
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


    //save the updated details of project
    public function updateDetails($id){
        //dd(request()->all());

        DB::table('tblproject')
            ->where('tblproject.intProjectId','=',$id)
            ->update([
                'strProjectName' => request()->projectName,
                'txtProjectDesc' => request()->projectDesc
            ]);

            header('Refresh:0;/Admin/Projects/'.$id);
    }
}
