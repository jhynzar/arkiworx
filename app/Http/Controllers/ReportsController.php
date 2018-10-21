<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    //
    public function index(){
        return view('Admin/reports');
    }

    public function projectReports(){
        //todo
    }

    public function costSummaryReport($id){
        //todo
    }

    public function projectPlanReports(){
        //todo
    }

    public function projectScheduleReport($id){
        //todo
    }

    public function materialsPricelistReport($date){
        $dt = new \DateTime($date);
        $dt->modify('+1 day');

        $materials = DB::select(
            '
            SELECT *
            FROM (
                SELECT t.intPriceId , t.decPrice, t.intMaterialId , t.dtmPriceAsOf
                FROM (
                    SELECT intMaterialId, MAX(dtmPriceAsOf) as latestPriceDate
                    FROM tblprice
                    WHERE dtmPriceAsOf <= :date
                    GROUP BY intMaterialId
                ) as r 
                INNER JOIN tblprice t
                ON (t.intMaterialId = r.intMaterialId AND t.dtmPriceAsOf = r.latestPriceDate)
            ) as e
            INNER JOIN tblmaterials f
            ON (e.intMaterialId = f.intMaterialId)
            WHERE f.intActive = 1
            ORDER BY f.strMaterialName ASC
            '
        ,[$dt]);

        //dd($materials);

        return view('Admin/reports-materials-pricelist',compact(
            'materials',
            'date'
        ));
    }
}
