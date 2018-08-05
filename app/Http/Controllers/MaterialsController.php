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
        $latestDates = DB::table('tblprice')
                    ->select('intMaterialId', DB::raw('MAX(dtmPriceAsOf) as latestDates'))
                    ->groupBy('intMaterialId');

        //latest prices
        $latestPrices = DB::table('tblprice')
                    ->joinSub($latestDates,'latestDates',function($join){
                        $join->on('tblprice.dtmPriceAsOf','=','latestDates.latestDates');
                    })
                    ->select('intPrice','tblprice.intMaterialId','tblprice.dtmPriceAsOf');

        //materials
        $materials = DB::table('tblmaterials')
                    ->joinSub($latestPrices,'latestPrices',function($join){
                        $join->on('tblmaterials.intMaterialId','=','latestPrices.intMaterialId');
                    })
                    ->get();

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

        dd(request()->all());
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
