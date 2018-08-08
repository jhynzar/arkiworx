<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //latest dates
        

        $materials= DB::select('SELECT *
        FROM (
            SELECT t.intPriceId , t.intPrice, t.intMaterialId , t.dtmPriceAsOf
            FROM (
                SELECT intMaterialId, MAX(dtmPriceAsOf) as latestPrice
                FROM tblprice
                GROUP BY intMaterialId
            ) as r 
            INNER JOIN tblprice t
            ON (t.intMaterialId = r.intMaterialId AND t.dtmPriceAsOf = r.latestPrice)
        ) as e
        INNER JOIN tblmaterials f
        ON (e.intMaterialId = f.intMaterialId)');
         
        
        //dd($materials);

        return view('Engineer/materials-pricelist')->with('materials',$materials);


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

        $req = request()->all();
        //dd($req);

        $id = DB::table('tblmaterials')->insertGetId(
            [
                'strMaterialName' => $req['materialDesc'],
                'strUnit' => $req['materialUnit']
            ]
        );

        DB::table('tblprice')->insertGetId(
            [
                'intPrice' => $req['materialPrice'],
                'intMaterialId' => $id
            ]
        );


        header('Refresh:0;/Engineer/Materials-Pricelist');
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
        $req = request()->all();

        DB::table('tblprice')
            ->insertGetId(
                [
                    'intPrice' => $req['materialPriceUpdate'],
                    'intMaterialId' => $req['materialIdToUpdate']
                ]
            );

        header('Refresh:0;/Engineer/Materials-Pricelist');
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
