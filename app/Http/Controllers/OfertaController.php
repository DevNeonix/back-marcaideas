<?php

namespace App\Http\Controllers;

use App\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=\App\Oferta::where('fecha_fin','>=',date("Y-m-d"))
            ->join('lugares','lugares.id','=','ofertas.lugar_id')
            ->select("ofertas.*" , "lugares.lat","lugares.lon")
            ->get();
        return response()->json($data, 200, [], 256);
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
     * @param  \App\oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Oferta::where("lugar_id",$id)->where('fecha_fin','>=',date("Y-m-d"))
            ->join('lugares','lugares.id','=','ofertas.lugar_id')
            ->select("ofertas.*" , "lugares.lat","lugares.lon")
            ->get();
        return response()->json($data, 200, [], 256);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(oferta $oferta)
    {
        //
    }
}
