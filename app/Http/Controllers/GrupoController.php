<?php

namespace App\Http\Controllers;

use App\grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(grupo::all(), 200, [], 256);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newGrupo = new grupo();
        $newGrupo->nombre = $request->nombre;
        $newGrupo->image_url = $request->image_url;
        if ($newGrupo->save()) {
            return response()->json(
                array("message" => "Grupo " . $request->nombre . " creado"),
                201,
                [],
                256
            );
        } else {
            return response()->json(
                array("message" => "Error al crear el grupo con el nombre: $request->nombre"),
                400,
                [],
                256
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grupo $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(grupo $grupo)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grupo $grupo
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\grupo $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grupo $grupo)
    {
        $ugrupo = grupo::findOrFail($request->id);
        $ugrupo->nombre=$request->nombre;
        $ugrupo->image_url=$request->image_url;

        if($ugrupo->save()){
            return response()->json('',200);
        }else{
            return response()->json('',400);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grupo $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = grupo::find($id);
        $grupo->delete();
        return response('',200);
    }
}
