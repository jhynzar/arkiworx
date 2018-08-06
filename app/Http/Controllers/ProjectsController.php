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
        $pendingProjects = DB::table('tblproject')
                    ->join('tblclient','tblclient.intClientId','=','tblproject.intClientId')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.strProjectStatus','=','pending')
                    ->orWhere('tblproject.strProjectStatus','=','for approval')
                    ->get();
        
        $ongoingProjects = DB::table('tblproject')
                    ->join('tblclient','tblclient.intClientId','=','tblproject.intClientId')
                    ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                    ->where('tblproject.strProjectStatus','=','on going')
                    ->get();

        $clients = DB::table('tblclient')->get();

        $engineers = DB::table('tblaccounts')
                    ->join('tblemployee','tblaccounts.intAccountId','=','tblemployee.intAccountId')
                    ->where('tblaccounts.strUserType','=','engineer')
                    ->get();

        //dd($pendingProjects);

        return view('Admin/projects',compact('pendingProjects','ongoingProjects','clients','engineers'));
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
