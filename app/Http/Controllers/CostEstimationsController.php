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
            //->where('tblproject.intEmployeeId','=','666')//EMPLOYEE ID
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
        $templateid = $_POST['projectTemplate'];
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
                'id' => $fields1 -> intProjectRequirementsTemplateId,
                'cost' => $fields1 -> decCost,
                'category' => $fields1 -> intWorkSubCategoryId
            ];
            array_push($TemplateArray1,$TemplateArr1);
        }
        //dd($TemplateArray1);

        $template2 = DB::select("
        SELECT  a.intMaterialEstimationTemplateId as intMaterialEstimationTemplateId,
                a.decQty as decQty,
                a.intWorkSubCategoryId as intWorkSubCategoryId,
                a.intMaterialId as intMaterialId,
                b.strMaterialName as strMaterialName,
                (a.decQty*b.Price) as decCost
        FROM tblmaterialestimationtemplate a 
        INNER JOIN 
        (   
            SELECT e.price as Price, e.material as Material, f.strMaterialName as strMaterialName
            FROM 
            (
                SELECT t.decPrice as price, t.intMaterialId as material
                FROM 
                (
                    SELECT intMaterialId, MAX(dtmPriceAsOf) as latestPriceDate
                    FROM tblprice
                    GROUP BY intMaterialId
                ) as r 
                INNER JOIN tblprice t
                ON (t.intMaterialId = r.intMaterialId AND t.dtmPriceAsOf = r.latestPriceDate)
            ) as e
            INNER JOIN tblmaterials f
            ON (e.material = f.intMaterialId)
            WHERE f.intActive = 1
        ) as b
        ON b.Material = a.intMaterialId
        WHERE intProjectTemplateId = ?",$templateid);

        $TemplateArray2 = array();
        foreach($template2 as $fields2){
                $TemplateArr2 = (object)[
                    'id' => $fields2 -> intMaterialEstimationTemplateId,
                    'cost' => $fields2 -> decCost,
                    'qty' => $fields2 -> decQty,
                    'category' => $fields2 -> intWorkSubCategoryId,
                    'material' => $fields2 -> intMaterialId,
                    'materialName' => $fields2 -> strMaterialName
                ];
                array_push($TemplateArray2,$TemplateArr2);
        }
        //dd($TemplateArray2);

        $template3 = DB::select("
        select SUM(decCost) as decCost, intProjectTemplateId
        from tblprojectrequirementstemplate 
        WHERE intProjectTemplateId = ?
        group by intProjectTemplateId
        ",$templateid);

        $TemplateArray3 = array();
        foreach($template3 as $fields3){
                $TemplateArr3 = (object)[
                    'Cost' => $fields3 -> decCost,
                    'Id' => $fields3 -> intProjectTemplateId
                ];
                array_push($TemplateArray3,$TemplateArr3);
        }
        //dd($TemplateArray3);

        $template4 = DB::select("
        SELECT 
        intProjectTemplateId,
        ( SUM(a.decQty * b.Price) ) as intOverallTotal
        FROM tblmaterialestimationtemplate a 
        INNER JOIN 
        (   
            SELECT e.price as Price, e.material as Material, f.strMaterialName as strMaterialName
            FROM 
            (
                SELECT t.decPrice as price, t.intMaterialId as material
                FROM 
                (
                    SELECT intMaterialId, MAX(dtmPriceAsOf) as latestPriceDate
                    FROM tblprice
                    GROUP BY intMaterialId
                ) as r 
                INNER JOIN tblprice t
                ON (t.intMaterialId = r.intMaterialId AND t.dtmPriceAsOf = r.latestPriceDate)
            ) as e
            INNER JOIN tblmaterials f
            ON (e.material = f.intMaterialId)
            WHERE f.intActive = 1
        ) as b
        ON b.Material = a.intMaterialId
        WHERE intProjectTemplateId = 1
        GROUP BY intProjectTemplateId",$templateid);

        $TemplateArray4 = array();
        foreach($template4 as $fields4){
                $TemplateArr4 = (object)[
                    'id' => $fields4 -> intProjectTemplateId,
                    'OverallTotal' => $fields4 -> intOverallTotal
                ];
                array_push($TemplateArray4,$TemplateArr4);
        }
        //dd($TemplateArray4);

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

        return view('Engineer/cost-estimation-computation',compact('AnswersArray','project','MaterialArray','TemplateArray1','TemplateArray2','TemplateArray3','TemplateArray4'));
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

            //materials

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId1'],
                'decQty' => $_POST['Quantity1'],
                'decCost' => $_POST['Cost1'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId1']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId2'],
                'decQty' => $_POST['Quantity2'],
                'decCost' => $_POST['Cost2'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId2']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId3'],
                'decQty' => $_POST['Quantity3'],
                'decCost' => $_POST['Cost3'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId3']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId4'],
                'decQty' => $_POST['Quantity4'],
                'decCost' => $_POST['Cost4'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId4']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId5'],
                'decQty' => $_POST['Quantity5'],
                'decCost' => $_POST['Cost5'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId5']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId6'],
                'decQty' => $_POST['Quantity6'],
                'decCost' => $_POST['Cost6'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId6']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId7'],
                'decQty' => $_POST['Quantity7'],
                'decCost' => $_POST['Cost7'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId7']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId8'],
                'decQty' => $_POST['Quantity8'],
                'decCost' => $_POST['Cost8'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId8']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId9'],
                'decQty' => $_POST['Quantity9'],
                'decCost' => $_POST['Cost9'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId9']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId10'],
                'decQty' => $_POST['Quantity10'],
                'decCost' => $_POST['Cost10'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId10']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId11'],
                'decQty' => $_POST['Quantity11'],
                'decCost' => $_POST['Cost11'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId11']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId12'],
                'decQty' => $_POST['Quantity12'],
                'decCost' => $_POST['Cost12'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId12']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId13'],
                'decQty' => $_POST['Quantity13'],
                'decCost' => $_POST['Cost13'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId13']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId14'],
                'decQty' => $_POST['Quantity14'],
                'decCost' => $_POST['Cost14'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId14']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId15'],
                'decQty' => $_POST['Quantity15'],
                'decCost' => $_POST['Cost15'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId15']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId16'],
                'decQty' => $_POST['Quantity16'],
                'decCost' => $_POST['Cost16'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId16']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId17'],
                'decQty' => $_POST['Quantity17'],
                'decCost' => $_POST['Cost17'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId17']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId18'],
                'decQty' => $_POST['Quantity18'],
                'decCost' => $_POST['Cost18'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId18']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId19'],
                'decQty' => $_POST['Quantity19'],
                'decCost' => $_POST['Cost19'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId19']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId20'],
                'decQty' => $_POST['Quantity20'],
                'decCost' => $_POST['Cost20'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId20']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId21'],
                'decQty' => $_POST['Quantity21'],
                'decCost' => $_POST['Cost21'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId21']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId22'],
                'decQty' => $_POST['Quantity22'],
                'decCost' => $_POST['Cost22'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId22']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId23'],
                'decQty' => $_POST['Quantity23'],
                'decCost' => $_POST['Cost23'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId23']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId24'],
                'decQty' => $_POST['Quantity24'],
                'decCost' => $_POST['Cost24'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId24']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId25'],
                'decQty' => $_POST['Quantity25'],
                'decCost' => $_POST['Cost25'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId25']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId26'],
                'decQty' => $_POST['Quantity26'],
                'decCost' => $_POST['Cost26'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId26']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId27'],
                'decQty' => $_POST['Quantity27'],
                'decCost' => $_POST['Cost27'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId27']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId28'],
                'decQty' => $_POST['Quantity28'],
                'decCost' => $_POST['Cost28'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId28']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId29'],
                'decQty' => $_POST['Quantity29'],
                'decCost' => $_POST['Cost29'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId29']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId30'],
                'decQty' => $_POST['Quantity30'],
                'decCost' => $_POST['Cost30'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId30']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId31'],
                'decQty' => $_POST['Quantity31'],
                'decCost' => $_POST['Cost31'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId31']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId32'],
                'decQty' => $_POST['Quantity32'],
                'decCost' => $_POST['Cost32'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId32']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId33'],
                'decQty' => $_POST['Quantity33'],
                'decCost' => $_POST['Cost33'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId33']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId34'],
                'decQty' => $_POST['Quantity34'],
                'decCost' => $_POST['Cost34'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId34']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId35'],
                'decQty' => $_POST['Quantity35'],
                'decCost' => $_POST['Cost35'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId35']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId36'],
                'decQty' => $_POST['Quantity36'],
                'decCost' => $_POST['Cost36'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId36']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId37'],
                'decQty' => $_POST['Quantity37'],
                'decCost' => $_POST['Cost37'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId37']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId38'],
                'decQty' => $_POST['Quantity38'],
                'decCost' => $_POST['Cost38'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId38']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId39'],
                'decQty' => $_POST['Quantity39'],
                'decCost' => $_POST['Cost39'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId39']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId40'],
                'decQty' => $_POST['Quantity40'],
                'decCost' => $_POST['Cost40'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId40']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId41'],
                'decQty' => $_POST['Quantity41'],
                'decCost' => $_POST['Cost41'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId41']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId42'],
                'decQty' => $_POST['Quantity42'],
                'decCost' => $_POST['Cost42'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId42']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId43'],
                'decQty' => $_POST['Quantity43'],
                'decCost' => $_POST['Cost43'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId43']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId44'],
                'decQty' => $_POST['Quantity44'],
                'decCost' => $_POST['Cost44'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId44']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId45'],
                'decQty' => $_POST['Quantity45'],
                'decCost' => $_POST['Cost45'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId45']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId46'],
                'decQty' => $_POST['Quantity46'],
                'decCost' => $_POST['Cost46'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId46']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId47'],
                'decQty' => $_POST['Quantity47'],
                'decCost' => $_POST['Cost47'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId47']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId48'],
                'decQty' => $_POST['Quantity48'],
                'decCost' => $_POST['Cost48'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId48']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId49'],
                'decQty' => $_POST['Quantity49'],
                'decCost' => $_POST['Cost49'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId49']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId50'],
                'decQty' => $_POST['Quantity50'],
                'decCost' => $_POST['Cost50'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId50']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId51'],
                'decQty' => $_POST['Quantity51'],
                'decCost' => $_POST['Cost51'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId51']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId52'],
                'decQty' => $_POST['Quantity52'],
                'decCost' => $_POST['Cost52'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId52']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId53'],
                'decQty' => $_POST['Quantity53'],
                'decCost' => $_POST['Cost53'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId53']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId54'],
                'decQty' => $_POST['Quantity54'],
                'decCost' => $_POST['Cost54'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId54']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId55'],
                'decQty' => $_POST['Quantity55'],
                'decCost' => $_POST['Cost55'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId55']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId56'],
                'decQty' => $_POST['Quantity56'],
                'decCost' => $_POST['Cost56'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId56']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId57'],
                'decQty' => $_POST['Quantity57'],
                'decCost' => $_POST['Cost57'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId57']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId58'],
                'decQty' => $_POST['Quantity58'],
                'decCost' => $_POST['Cost58'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId58']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId59'],
                'decQty' => $_POST['Quantity59'],
                'decCost' => $_POST['Cost59'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId59']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId60'],
                'decQty' => $_POST['Quantity60'],
                'decCost' => $_POST['Cost60'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId60']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId61'],
                'decQty' => $_POST['Quantity61'],
                'decCost' => $_POST['Cost61'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId61']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId62'],
                'decQty' => $_POST['Quantity62'],
                'decCost' => $_POST['Cost62'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId62']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId63'],
                'decQty' => $_POST['Quantity63'],
                'decCost' => $_POST['Cost63'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId63']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId64'],
                'decQty' => $_POST['Quantity64'],
                'decCost' => $_POST['Cost64'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId64']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId65'],
                'decQty' => $_POST['Quantity65'],
                'decCost' => $_POST['Cost65'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId65']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId66'],
                'decQty' => $_POST['Quantity66'],
                'decCost' => $_POST['Cost66'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId66']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId67'],
                'decQty' => $_POST['Quantity67'],
                'decCost' => $_POST['Cost67'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId67']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId85'],
                'decQty' => $_POST['Quantity85'],
                'decCost' => $_POST['Cost85'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId85']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId86'],
                'decQty' => $_POST['Quantity86'],
                'decCost' => $_POST['Cost86'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId86']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId87'],
                'decQty' => $_POST['Quantity87'],
                'decCost' => $_POST['Cost87'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId87']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId88'],
                'decQty' => $_POST['Quantity88'],
                'decCost' => $_POST['Cost88'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId88']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId89'],
                'decQty' => $_POST['Quantity89'],
                'decCost' => $_POST['Cost89'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId89']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId90'],
                'decQty' => $_POST['Quantity90'],
                'decCost' => $_POST['Cost90'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId90']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId91'],
                'decQty' => $_POST['Quantity91'],
                'decCost' => $_POST['Cost91'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId91']
            ]
        );
        
        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId92'],
                'decQty' => $_POST['Quantity92'],
                'decCost' => $_POST['Cost92'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId92']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId93'],
                'decQty' => $_POST['Quantity93'],
                'decCost' => $_POST['Cost93'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId93']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId94'],
                'decQty' => $_POST['Quantity94'],
                'decCost' => $_POST['Cost94'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId94']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId95'],
                'decQty' => $_POST['Quantity95'],
                'decCost' => $_POST['Cost95'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId95']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId96'],
                'decQty' => $_POST['Quantity96'],
                'decCost' => $_POST['Cost96'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId96']
            ]
        );

        DB::table('tblmaterialestimates')
        ->insertGetId(
            [
                'intMaterialId' => $_POST['MaterialId97'],
                'decQty' => $_POST['Quantity97'],
                'decCost' => $_POST['Cost97'],
                'intProjectId' => $id ,
                'intWorkSubCategoryId' => $_POST['CategoryId97']
            ]
        );
        //trabahong tamad HAHAHA

        // ALWAYS MAKE THIS LAST

        // update project status
        DB::table('tblproject')
        ->where('tblproject.intProjectId','=',$id)
        ->update(['strProjectStatus' => 'for approval']);

        //refresh
        header('Refresh:0;/Engineer/Cost-Estimation');
    }
}
