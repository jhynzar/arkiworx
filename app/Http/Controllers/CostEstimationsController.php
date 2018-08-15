<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostEstimationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $pendingProjectCostEstimations = DB::table('tblproject')
                                        ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                                        ->where('tblproject.intEmployeeId','=','777')//EMPLOYEE ID
                                        ->where('tblproject.strProjectStatus','=','pending')
                                        ->orderBy('tblproject.intProjectId','desc')
                                        ->get();

        return view('Engineer/cost-estimation',compact('pendingProjectCostEstimations'));
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

    public function createEstimation($id){
        //request id of project and template

        $formulas = DB::select("
        select f.decvalue as 'Values', h.strDesc as 'X', v.strDesc as 'Y', w.strDesc as 'Works' from tblformulavalues f inner join tblhorizontaloptions h on h.intHorizontalOptionsId = f.intHorizontalOptionsId inner join tblverticaloptions v on v.intVerticalOptionsId = f.intVerticalOptionsId inner join tblworksformula w on v.intWoksFormulaId = w.intWorksFormulaId and h.intHorizontalOptionsId = w.intWorksFormulaId
        ");
        //dd($formulas);

        $project =  DB::table('tblproject')
                    ->where('intProjectId','=',$id)
                    ->first();

        return view('Engineer/cost-estimation-computation',compact('formulas','project'));
    }
}
