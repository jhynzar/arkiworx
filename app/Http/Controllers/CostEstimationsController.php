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

        $pendingProjectCostEstimations = 
            DB::table('tblproject')
            ->join('tblclient','tblclient.intClientId','=','tblproject.intClientId')
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
/*        $templateid = $_POST['projectTemplate'];
        $templateid = array($templateid);

        $template1 = DB::select("
        select *
        from tblprojectrequirementstemplate
        WHERE intProjectTemplateId = ?
        order by intWorksubcategoryid asc
        ",$templateid);

        $TemplateArray1 = array();
        foreach($template1 as $fields1){
            $TemplateArr1 = (object)[
                'cost' => $fields1 -> decCost,
                'category' => $fields1 -> intWorkSubCategoryId
            ];
            array_push($TemplateArray1,$TemplateArr1);
        }
        //dd($TemplateArray1);

        $template2 = DB::select("
        select *
        from tblmaterialestimationtemplate  
        WHERE intProjectTemplateId = ?
        ",$templateid);

        $TemplateArray2 = array();
        $c = 5;
        $m = 0;
        foreach($template2 as $fields2){
                $TemplateArr2 = (object)[
                    'qty' => $fields2 -> decQty,
                    'category' => $fields2 -> intWorkSubCategoryId,
                    'material' => $fields2 -> intMaterialId
                ];
                array_push($TemplateArray2,$TemplateArr2);
        }
        //dd($TemplateArray2);
*/
        $formulas = DB::select("
        select X.h as Horizontal, X.v as Vertical, X.f as Value, X.Work as Work
        from 
        (
            select tblhorizontaloptions.intHorizontalOptionsId as h, tblhorizontaloptions.intWorksFormulaId as Work, tblformulavalues.decValue as f, tblformulavalues.intVerticalOptionsId as v
            from tblformulavalues inner join tblhorizontaloptions
            on tblformulavalues.inthorizontaloptionsid = tblhorizontaloptions.inthorizontaloptionsid
            
        ) X 
        inner JOIN
        (
            select tblverticaloptions.intVerticalOptionsId as v, tblverticaloptions.intWorksFormulaId as Work, tblformulavalues.decValue as f, tblformulavalues.intHorizontalOptionsId as h
            from tblformulavalues inner join tblverticaloptions
            on tblformulavalues.intVerticalOptionsId = tblverticaloptions.intVerticalOptionsId
            
        ) Y
        on X.Work = Y.Work and X.v = Y.v and X.h = Y.h
        ");

        
        $AnswersArray = array();
        foreach($formulas as $formula){
            $Answers = (object)[
                'X' => $formula -> Horizontal,
                'Y' => $formula -> Vertical,
                'Values' => $formula -> Value,
                'Work' => $formula -> Work
            ];
            array_push($AnswersArray,$Answers);
        }
        //$Work = array_search(1, array_column($AnswersArray, 'Work'));
        /*$X = 1;   //horizontal
        $Y = 2; //vertical
        $Z = 1; //work category
        foreach($AnswersArray as $workArr){
            if($X === $workArr->X && $Y === $workArr->Y && $Z === $workArr->Work){
                dd($workArr->Values);
            }
        }*/

        $materials = DB::select("
        SELECT tblprice.dtmPriceAsOf as Date, tblprice.decPrice as Price, tblmaterials.strMaterialName as Material, tblprice.intMaterialId as Id
        FROM tblprice INNER JOIN tblmaterials 
        ON tblprice.intMaterialId = tblmaterials.intMaterialId 
        WHERE tblmaterials.intActive = 1 
        ORDER by tblprice.intMaterialId, tblprice.dtmPriceAsOf
        ");
        $MaterialArray = array();
        foreach($materials as $material){
            $MaterialArr = (object)[
                'date' => $material -> Date,
                'price' => $material -> Price,
                'materialName' => $material -> Material,
                'MaterialId' => $material -> Id
            ];
            array_push($MaterialArray,$MaterialArr);
        }

        /*$materialid = 1; //material Id
        $date1 = '';
        foreach($MaterialArray as $materialindex){
            $date2 = $materialindex->date;
            $materialid2 = $materialindex->MaterialId;
            if($date1 < $date2 && $materialid === $materialid2){
                $date1 = $date2;
                $presyo = $materialindex -> price;
            }
        }
        dd($presyo);*/

        $project =  DB::table('tblproject')
                    ->where('intProjectId','=',$id)
                    ->first();

        return view('Engineer/cost-estimation-computation',compact('AnswersArray','project','MaterialArray','TemplateArray1','TemplateArray2'));
    }

    public function saveEstimation($id){
        //general construction ;
        $BuildingPermit = $_POST['BuildingPermit'];
        $TemporaryFacilities = $_POST['TemporaryFacilities'];
        $WorkersBarracks = $_POST['WorkersBarracks'];
        $Excavation = $_POST['Excavation'];
        $Backfill = $_POST['Backfill'];
        $Lastillas = $_POST['Lastillas'];
        $SoilPoisoning = $_POST['SoilPoisoning'];
        $LaborCost = $_POST['LaborCost'];
        $ToolsEquipments = $_POST['ToolsEquipments'];
        $Transportation = $_POST['Transportation'];
        $Contigency = $_POST['Contigency'];
        $OverheadProfit = $_POST['OverheadProfit'];
        //column
        $ColumnCement = $_POST['ColumnCement'];
        $ColumnCementBag = $_POST['ColumnCementBag'];
        $ColumnCementCost = $_POST['ColumnCementCost'];
        
        $ColumnS = $_POST['ColumnS'];
        $ColumnSand = $_POST['ColumnSand'];
        $ColumnSandCost = $_POST['ColumnSandCost'];
        
        $ColumnG = $_POST['ColumnG'];
        $ColumnGravel = $_POST['ColumnGravel'];
        $ColumnGravelCost = $_POST['ColumnGravelCost'];
        
        $ColumnSteelBar = $_POST['ColumnSteelBar'];
        $ColumnSteelBarQty = $_POST['ColumnSteelBarQty'];
        $ColumnSteelBarCost = $_POST['ColumnSteelBarCost'];
        
        $ColumnTieBar = $_POST['ColumnTieBar'];
        $ColumnTieBarQty = $_POST['ColumnTieBarQty'];
        $ColumnTieBarCost = $_POST['ColumnTieBarCost'];
        
        $ColumnTieWire = $_POST['ColumnTieWire'];
        $ColumnTieWireKg = $_POST['ColumnTieWireKg'];
        $ColumnTieWireCost = $_POST['ColumnTieWireCost'];

        //--saving of data
        //$BuildingPermit = $_POST['BuildingPermit'];
        //$TemporaryFacilities = $_POST['TemporaryFacilities'];
        //$WorkersBarracks = $_POST['WorkersBarracks'];
        //$Excavation = $_POST['Excavation'];
        //$Backfill = $_POST['Backfill'];
        //$Lastillas = $_POST['Lastillas'];
        //$SoilPoisoning = $_POST['SoilPoisoning'];
        //------$LaborCost = $_POST['LaborCost'];
        //$ToolsEquipments = $_POST['ToolsEquipments'];
        //$Transportation = $_POST['Transportation'];
        //$Contigency = $_POST['Contigency'];
        //$OverheadProfit = $_POST['OverheadProfit'];

        //General construction

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 1,
            'strDesc' => 'Building Permit',
            'decEstimatedPrice' => $BuildingPermit,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 2,
            'strDesc' => 'Temporary Facilities',
            'decEstimatedPrice' => $TemporaryFacilities,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 2,
            'strDesc' => 'WorkersBarracks',
            'decEstimatedPrice' => $WorkersBarracks,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 3,
            'strDesc' => 'Excavation',
            'decEstimatedPrice' => $Excavation,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 3,
            'strDesc' => 'Backfill',
            'decEstimatedPrice' => $Backfill,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 3,
            'strDesc' => 'Lastillas',
            'decEstimatedPrice' => $Lastillas,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 3,
            'strDesc' => 'Soil Poisoning',
            'decEstimatedPrice' => $SoilPoisoning,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 4,
            'strDesc' => 'Tools And Equipments',
            'decEstimatedPrice' => $ToolsEquipments,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 4,
            'strDesc' => 'Transportation',
            'decEstimatedPrice' => $Transportation,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 4,
            'strDesc' => 'Contingency',
            'decEstimatedPrice' => $Contigency,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 4,
            'strDesc' => 'OverheadProfit',
            'decEstimatedPrice' => $OverheadProfit,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);

        //Labour Insert - TEMPORARY
        DB::table('tblprojectrequirements')
        ->insertGetId([
            'intWorkSubCategoryId' => 4,
            'strDesc' => 'Labor Cost',
            'decEstimatedPrice' => $LaborCost,
            'decActualPrice' => null, 
            'intProjectId' => $id,
        ]);



        //- static
        // $id = projectId
        // 5 = column (subcategoryId static from database)
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnCement,
                'intQty' => $ColumnCementBag,
                'decCost' => $ColumnCementCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnS,
                'intQty' => $ColumnSand,
                'decCost' => $ColumnSandCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnG,
                'intQty' => $ColumnGravel,
                'decCost' => $ColumnGravelCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnSteelBar,
                'intQty' => $ColumnSteelBarQty,
                'decCost' => $ColumnSteelBarCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnTieBar,
                'intQty' => $ColumnTieBarQty,
                'decCost' => $ColumnTieBarCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $ColumnTieWire,
                'intQty' => $ColumnTieWireKg,
                'decCost' => $ColumnTieWireCost,
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => 5
            ]
        );

        //footing

        // ALWAYS MAKE THIS LAST

        // update project status
        DB::table('tblproject')
        ->where('tblproject.intProjectId','=',$id)
        ->update(['strProjectStatus' => 'for approval']);

        //refresh
        header('Refresh:0;/Engineer/Cost-Estimation');
    }
}
