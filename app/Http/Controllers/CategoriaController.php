<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(categoria::all(), 200, [], 256);
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
        $new = new categoria();
        $new->nombre = $request->nombre;
        $new->grupo_id = $request->grupo_id;
        $new->image_url = $request->image_url;
        if ($new->save()) {
            return response()->json(
                array("message" => "Categoria " . $request->nombre . " creado"),
                201,
                [],
                256
            );
        } else {
            return response()->json(
                array("message" => "Error al crear la categoria con el nombre: $request->nombre"),
                400,
                [],
                256
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=categoria::where('grupo_id',"$id")->get();
        return response()->json($data, 200, [], 256);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria $categoria)
    {
        $update = categoria::findOrFail($request->id);
        $update->nombre=$request->nombre;
        $update->grupo_id=$request->grupo_id;
        $update->image_url=$request->image_url;

        if($update->save()){
            return response()->json('',200);
        }else{
            return response()->json('',400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria)
    {
        $categoria->delete();
        return response('',200);
    }
}
