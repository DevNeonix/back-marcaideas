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
        return response()->json(Oferta::all(), 200, [], 256);
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
        return response()->json(Oferta::where("lugar_id",$id)->get(), 200, [], 256);
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
