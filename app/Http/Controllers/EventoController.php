<?php

namespace App\Http\Controllers;

use App\evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(evento::all(), 200, [], 256);
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
        $new = new evento();
        $new->nombre = $request->nombre;
        $new->descripcion = $request->descripcion;
        $new->image_url = $request->image_url;
        $new->fecha_inicio = $request->fecha_inicio;
        $new->fecha_fin = $request->fecha_fin;
        $new->lat = $request->lat;
        $new->lon = $request->lon;
        $new->ubicacion = $request->ubicacion;
        if ($new->save()) {
            return response()->json(
                array("message" => "Evento " . $request->nombre . " creado"),
                201,
                [],
                256
            );
        } else {
            return response()->json(
                array("message" => "Error al crear el evento con el nombre: $request->nombre"),
                400,
                [],
                256
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(evento $evento)
    {
        //
    }
}
