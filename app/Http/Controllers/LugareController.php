<?php

namespace App\Http\Controllers;

use App\categoria;
use App\lugare;
use Illuminate\Http\Request;

class LugareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(lugare::all(), 200, [], 256);
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
        $new = new lugare();
        $new->categoria_id = $request->categoria_id;
        $new->razon_social = $request->razon_social;
        $new->descripcion = $request->descripcion;
        $new->lat = $request->lat;
        $new->lon = $request->lon;
        $new->telefono = $request->telefono;
        $new->direccion = $request->direccion;
        $new->ofertas = $request->ofertas;
        $new->horario_apertura = $request->horario_apertura;
        $new->horario_cierre = $request->horario_cierre;
        $new->redes = $request->redes;
        $new->image_url = $request->image_url;
        if ($new->save()) {
            return response()->json(
                array("message" => "Lugar " . $request->nombre . " creado"),
                201,
                [],
                256
            );
        } else {
            return response()->json(
                array("message" => "Error al crear el lugar con el nombre: $request->nombre"),
                400,
                [],
                256
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lugare  $lugare
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=lugare::where('categoria_id',"$id")->get();
        return response()->json($data, 200, [], 256);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lugare  $lugare
     * @return \Illuminate\Http\Response
     */
    public function edit(lugare $lugare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lugare  $lugare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lugare $lugare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lugare  $lugare
     * @return \Illuminate\Http\Response
     */
    public function destroy(lugare $lugare)
    {
        //
    }
}
