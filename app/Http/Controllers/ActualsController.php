<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //[temporary] one
        $onGoingProjects = DB::table('tblproject')
                ->where('strProjectStatus','=','on going')
                ->where('intEmployeeId','=','777') //EmployeeId
                ->get();

        $onGoingProjectsWithCostSummary = array();
        foreach($onGoingProjects as $onGoingProject){
            
            $materialEstimates = DB::table('tblmaterialestimates')
                                ->where('intProjectId','=',$onGoingProject->intProjectId)
                                ->get();
            $materialActuals = DB::table('tblmaterialactuals')
                                ->where('intProjectId','=',$onGoingProject->intProjectId)
                                ->get();
            $customEstimates = DB::table('tblcustomestimates')
                                ->where('intProjectId','=',$onGoingProject->intProjectId)
                                ->get();
            $customActuals = DB::table('tblcustomactuals')
                                ->where('intProjectId','=',$onGoingProject->intProjectId)
                                ->get();
            

            $onGoingProjectWithCostSummary = (object) [
                'projectDetails' => $onGoingProject,
                'materialEstimates' => $materialEstimates,
                'materialActuals' => $materialActuals,
                'customEstimates' => $customEstimates,
                'customActuals' => $customActuals
            ];

            array_push($onGoingProjectsWithCostSummary,$onGoingProjectWithCostSummary);
        }
        

        //dd($onGoingProjectsWithCostSummary);
        return view('Engineer/actuals');
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
