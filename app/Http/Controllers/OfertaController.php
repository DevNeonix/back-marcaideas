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

        $data=\App\Oferta::
            /*where('fecha_fin','>=',date("Y-m-d"))
            ->*/join('lugares','lugares.id','=','ofertas.lugar_id')
            ->select("ofertas.*" , "lugares.lat","lugares.lon")
            ->get();
        return response()->json($data, 200, [], 256);
    }

    /**
     * Show the form for creating a new resource.-
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
        $update = oferta::find($request->id);
        $update->lugar_id=$request->lugar_id;
        $update->producto=$request->producto;
        $update->descripcion=$request->descripcion;
        $update->cupon=$request->cupon;
        $update->precio_regular=$request->precio_regular;
        $update->precio_promocion=$request->precio_promocion;
        $update->descuento=$request->descuento;
        $update->fecha_inicio=$request->fecha_inicio;
        $update->fecha_fin=$request->fecha_fin;
        $update->image_url=$request->image_url;
        $update->condiciones=$request->condiciones;

        if($update->save()){
            return response()->json('',200);
        }else{
            return response()->json('',400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(oferta $oferta)
    {
        $oferta->delete();
        return response('',200);
    }
}
