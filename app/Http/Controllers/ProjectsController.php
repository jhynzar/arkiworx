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
        INNER JOIN tblemployee
        ON (tblproject.intEmployeeId = tblemployee.intEmployeeId)
        WHERE (tblproject.intActive = 1) AND
        (tblproject.strProjectStatus = 'pending' OR tblproject.strProjectStatus = 'for approval')
        ");
        
        $ongoingProjects = DB::select("
            
        SELECT *
        FROM tblproject
        INNER JOIN tblemployee
        ON (tblproject.intEmployeeId = tblemployee.intEmployeeId)
        WHERE (tblproject.intActive = 1) AND
        (tblproject.strProjectStatus = 'on going')
        
        ");

        $finishedProjects = DB::select("
        
        SELECT *
        FROM tblproject
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

        $projectTemplates = DB::table('tblprojecttemplate')
                            ->get();

        $engineers = DB::table('tblaccounts')
                    ->join('tblemployee','tblaccounts.id','=','tblemployee.intAccountId')
                    ->where('tblaccounts.strUserType','=','Engineer')
                    ->where('tblaccounts.intActive','=',1)
                    ->get();


        return view('Admin/projects',compact('pendingProjectsWithTotalEstimatedCost','ongoingProjects','finishedProjects','projectTemplates','engineers'));
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
                    'strClientName' => $req['projectClient'],
                    'intEmployeeId' => $req['projectEngineer'],
                    'intActive' => 1,
                    'intProjectTemplateId' => $req['projectTemplate'],
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
                ->join('tblemployee','tblemployee.intEmployeeId','=','tblproject.intEmployeeId')
                ->where('tblproject.intActive','=',1)
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
            ->where('tblproject.intActive','=',1)
            ->update(['strProjectStatus'=> 'on going']);

            header('Refresh:0;/Admin/Projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //

        //dd(request()->all());
        DB::table('tblproject')
            ->where('tblproject.intProjectId','=',$id)
            ->where('tblproject.intActive','=',1)
            ->update([
                'intActive' => 0,
            ]);
        
        header('Refresh:0;/Admin/Projects');
    }


    //save the updated details of project
    public function updateDetails($id){
        //dd(request()->all());

        DB::table('tblproject')
            ->where('tblproject.intProjectId','=',$id)
            ->where('tblproject.intActive','=',1)
            ->update([
                'strProjectName' => request()->projectName,
                'txtProjectDesc' => request()->projectDesc
            ]);

            header('Refresh:0;/Admin/Projects/'.$id);
    }

    public function viewCostSummary($id){
         //
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

        //dd($projectPartneredActuals);
        //dd($projectPartneredEstimates);
        //dd($projectLoneEstimates);
        //dd($projectLoneActuals);
        //dd($projectCostSummary);
        //dd($projectWithDetails);

        //---------WORK CATEGORIES
        //for category and sub category


        //actuals categories and sub categories
        $projectActualsAllWorkCategoriesIds = DB::select("
            SELECT tblworkcategory.intWorkCategoryId
            FROM `tblmaterialactuals`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialactuals.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialactuals.intProjectId = :id
            GROUP BY tblworkcategory.intWorkCategoryId       
        ",['id'=>$id]);

        $projectActualsAllWorkSubCategoriesIds = DB::select("
            SELECT tblworksubcategory.intWorkSubCategoryId
            FROM `tblmaterialactuals`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialactuals.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialactuals.intProjectId = :id
            GROUP BY tblworksubcategory.intWorkSubCategoryId
        ",['id'=>$id]);

        //estimates categories and sub categories
        $projectEstimatesAllWorkCategoriesIds = DB::select("
            SELECT tblworkcategory.intWorkCategoryId
            FROM `tblmaterialestimates`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialestimates.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialestimates.intProjectId = :id
            GROUP BY tblworkcategory.intWorkCategoryId      
        ",['id'=>$id]);



        $projectEstimatesAllWorkSubCategoriesIds = DB::select("
            SELECT tblworksubcategory.intWorkSubCategoryId
            FROM `tblmaterialestimates`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialestimates.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialestimates.intProjectId = :id
            GROUP BY tblworksubcategory.intWorkSubCategoryId
        ",['id'=>$id]);





        // ACTUALS WORK CATEGORIES data to pass to view
        $projectWorkCategories = array(); 
        foreach($projectActualsAllWorkCategoriesIds as $workCategory){
            $workCategoryDetails = DB::table('tblWorkCategory')
                                ->where('intWorkCategoryId','=',$workCategory->intWorkCategoryId)
                                ->first();

            array_push($projectWorkCategories,$workCategoryDetails);
        }

        // ESTIMATES WORK CATEGORIES
        foreach($projectEstimatesAllWorkCategoriesIds as $workCategory){

            //Duplicate checker
            $isDuplicate = false;
            foreach($projectWorkCategories as $workCategoryCheck){
                if($workCategory->intWorkCategoryId == $workCategoryCheck->intWorkCategoryId){
                    $isDuplicate = true;
                    break;
                }
            }

            if($isDuplicate){
                continue;
            }

            $workCategoryDetails = DB::table('tblWorkCategory')
                                ->where('intWorkCategoryId','=',$workCategory->intWorkCategoryId)
                                ->first();

            array_push($projectWorkCategories,$workCategoryDetails);
        }



        //dd($projectWorkCategories);

        //---------WORK SUB CATEGORIES

        // ACTUALS WORK SUB CATEGORIES data to pass to view
        $projectWorkSubCategories = array();
        foreach($projectActualsAllWorkSubCategoriesIds as $workSubCategory){
            $workSubCategoryDetails = DB::table('tblWorkSubCategory')
                                ->where('intWorkSubCategoryId','=',$workSubCategory->intWorkSubCategoryId)
                                ->first();

            array_push($projectWorkSubCategories,$workSubCategoryDetails);
        }

        // ESTIMATES WORK SUB CATEGORIES
        foreach($projectEstimatesAllWorkSubCategoriesIds as $workSubCategory){

            //Duplicate checker
            $isDuplicate = false;
            foreach($projectWorkSubCategories as $workSubCategoryCheck){
                if($workSubCategory->intWorkSubCategoryId == $workSubCategoryCheck->intWorkSubCategoryId){
                    $isDuplicate = true;
                    break;
                }
            }

            if($isDuplicate){
                continue;
            }

            $workSubCategoryDetails = DB::table('tblWorkSubCategory')
                                ->where('intWorkSubCategoryId','=',$workSubCategory->intWorkSubCategoryId)
                                ->first();

            array_push($projectWorkSubCategories,$workSubCategoryDetails);
        }

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
        return view('Admin/cost-summary',compact(
            'projectCostSummary',
            'projectWorkCategories',
            'projectWorkSubCategories',
            'allProjectRequirements',
            'projectRequirementsWorkCategories',
            'projectRequirementsWorkSubCategories',
            'totalEstimatedCost',
            'totalActualsCost'
        ));
    }

    /*
    =======================
    VIEW COST SUMMARY END
    =======================
    */


    public function viewCostSummaryReports($id){
        //
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

    /*
    =====================
    VIEW COST SUMMARY REPORTS END
    =====================
    */

    public function viewProgressSchedule($id){
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
        return view ('Admin/project-progress-schedule',compact(['allProjectSchedulesWithPhases']));
    }

    public function reports(){
        return view('Admin/reports-projects');
    }
}
