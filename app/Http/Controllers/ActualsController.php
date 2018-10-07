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

            //computing to totals of material actual
            $materialActualTotalQty = 0;
            $materialActualTotalCost = 0;
            foreach($materialActualHistory as $history){
                $materialActualTotalQty += $history->decQty;
                $materialActualTotalCost += $history->decCost;
            }

            //TODO IF NATAPOS NA NI ERWIN, ILAGAY YUNG UNIT COST
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

        //dd($projectWithDetails);


        //for category and sub category
        

        $projectAllWorkCategoriesIds = DB::select("
            SELECT tblworkcategory.intWorkCategoryId
            FROM `tblmaterialactuals`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialactuals.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialactuals.intProjectId = :id
            GROUP BY tblworkcategory.intWorkCategoryId       
        ",['id'=>$id]);

        $projectAllWorkSubCategoriesIds = DB::select("
            SELECT tblworksubcategory.intWorkSubCategoryId
            FROM `tblmaterialactuals`
            INNER JOIN `tblworksubcategory`
            ON (tblmaterialactuals.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblmaterialactuals.intProjectId = :id
            GROUP BY tblworksubcategory.intWorkSubCategoryId
        ",['id'=>$id]);


        $projectWorkCategories = array();
        foreach($projectAllWorkCategoriesIds as $workCategory){
            $workCategoryDetails = DB::table('tblWorkCategory')
                                ->where('intWorkCategoryId','=',$workCategory->intWorkCategoryId)
                                ->first();

            array_push($projectWorkCategories,$workCategoryDetails);
        }

        $projectWorkSubCategories = array();
        foreach($projectAllWorkSubCategoriesIds as $workSubCategory){
            $workSubCategoryDetails = DB::table('tblWorkSubCategory')
                                ->where('intWorkSubCategoryId','=',$workSubCategory->intWorkSubCategoryId)
                                ->first();

            array_push($projectWorkSubCategories,$workSubCategoryDetails);
        }

        //=====PROJECT REQUIREMENTS VIEWING

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
            WHERE tblprojectrequirements.intProjectId = :id && tblprojectrequirements.decActualPrice IS NOT NULL
            GROUP BY tblworkcategory.intWorkCategoryId
        ",['id'=>$id]);

        $projectRequirementsAllWorkSubCategoriesIds = DB::select("
            SELECT tblworksubcategory.intWorkSubCategoryId
            FROM `tblprojectrequirements`
            INNER JOIN `tblworksubcategory`
            ON (tblprojectrequirements.intWorkSubCategoryId = tblworksubcategory.intWorkSubCategoryId)
            INNER JOIN `tblworkcategory`
            ON (tblworkcategory.intWorkCategoryId = tblworksubcategory.intWorkCategoryId)
            WHERE tblprojectrequirements.intProjectId = :id && tblprojectrequirements.decActualPrice IS NOT NULL
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


        //----FOR ADD MODALS
        //--MATERIALS

        $allMaterials = DB::table('tblmaterials')
                        ->where('intActive','=',1)
                        ->get();


        $allCategories = DB::table('tblworkcategory')
                        ->where('tblworkcategory.intWorkCategoryId','!=',1)
                        ->get();


        $allCategoriesWithSub = array();
        foreach($allCategories as $category){
            $subCategories = DB::table('tblworksubcategory')
                            ->where('tblworksubcategory.intWorkCategoryId','=',$category->intWorkCategoryId)
                            ->get()
                            ->toArray();

            $categoryWithSub = (object) [
                'intWorkCategoryId' => $category->intWorkCategoryId,
                'strWorkCategoryDesc' => $category->strWorkCategoryDesc,
                'subCategories' => $subCategories
            ];

            array_push($allCategoriesWithSub,$categoryWithSub);
        }

        //--CUSTOM ACTUALS
        $allProjectRequirementsWithNoActuals = DB::table('tblprojectrequirements')
                                            ->where('tblprojectrequirements.intProjectId','=',$id)//Project ID
                                            ->where('tblprojectrequirements.decActualPrice','=',null)
                                            ->get();

        //

        //dd($allProjectRequirementsWithNoActuals);

        //dd($allCategoriesWithSub);

        //dd($projectWorkSubCategories);
        //dd($projectWithDetails);
        return view('Engineer/actuals',compact(
            'projectWithDetails',
            'projectWorkCategories',
            'projectWorkSubCategories',
            'allCategoriesWithSub',
            'allMaterials',
            'allProjectRequirementsWithNoActuals',        
            'allProjectRequirements',
            'projectRequirementsWorkCategories',
            'projectRequirementsWorkSubCategories'
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


    public function createMaterialActualNew($id){


        $request = request()->all();

        $materialIdLatestPrice = DB::table('tblprice')
                                ->where('tblprice.intMaterialId','=',$request['newMaterialActualMaterialId'])
                                ->orderBy('tblprice.dtmPriceAsOf','desc')
                                ->first();

        $insertedMaterialActualsId = DB::table('tblmaterialactuals')
                    ->insertGetId(
                        [
                            'intMaterialId' => $request['newMaterialActualMaterialId'],
                            'intProjectId' => $id,
                            'intWorkSubCategoryId' => $request['newMaterialActualSubCategory']
                        ]
                    );

        DB::table('tblmaterialactualshistory')
                    ->insertGetId(
                        [
                            'decQty' => $request['newMaterialActualQty'],
                            'decCost' => $request['newMaterialActualQty'] * $materialIdLatestPrice->decPrice,
                            'intMaterialActualsId' => $insertedMaterialActualsId
                        ]
                    );
        
        header('Refresh:0;/Engineer/Engineer-Projects/'.$id.'/Actuals');
    }

    public function createMaterialActualFrom($id){
        return 'createMaterialActualFrom';
    }

    //this code is used in "Adding" and "Updating" projectRequirement since the logic is the same
    public function updateProjectRequirementActual($id){

        $req = request()->all();

        DB::table('tblprojectrequirements')
            ->where('tblprojectrequirements.intRequirementId','=', $req['projectRequirementId'])
            ->update(['decActualPrice' => $req['actualPrice']]);


        header('Refresh:0;/Engineer/Engineer-Projects/'.$id.'/Actuals');
    }
}
