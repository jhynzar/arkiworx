<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        //getting project details
        $project = DB::table('tblproject')
                ->where('strProjectStatus','=','on going')
                ->where('intProjectId','=',$id)
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

            $latestPrice = DB::table('tblprice')
                        ->where('tblprice.intMaterialId','=',$materialActual->intMaterialId)
                        ->orderBy('dtmPriceAsOf','desc')
                        ->first();

            //adding latest price
            
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
                'latestPrice' => $latestPrice
            ];

            $materialActualWithHistory = (object) [
                'materialActualsDetails' => $materialActualsDetails,
                'materialActualsHistory' => $materialActualHistory
            ];

            array_push($materialActualsWithHistory,$materialActualWithHistory);
            
        }
        $projectRequirements = DB::table('tblprojectrequirements')
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

        //dd($projectWorkSubCategories);


        //dd($allCategoriesWithSub);

        //dd($projectWorkSubCategories);
        //dd($projectWithDetails);
        //dd($projectCostSummary);
        return view('Engineer/cost-summary',compact('projectCostSummary','projectWorkCategories','projectWorkSubCategories'));
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