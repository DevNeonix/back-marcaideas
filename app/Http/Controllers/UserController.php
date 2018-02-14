<?php

namespace App\Http\Controllers;

use App\categoria;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return response()->json($data, 200, [], 256);
    }

    public function login(Request $request)
    {
        $data = User::where('email', $request->email)->where('password',$request->password);
        if ($data->count() > 0) {
            return response()->json($data->first(), 200, [], 256);
        }else{
            return response()->json($data->first(), 400, [], 256);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $verificar = User::where('email', $request->email)->count();
        if ($verificar > 0) {
            return response()->json(
                array("message" => "el email ya esta en uso"),
                400,
                [],
                256
            );
        } else {

            $newUser = new User();
            $newUser->fullname = $request->fullname;
            $newUser->telefono = $request->telefono;
            $newUser->direccion = $request->direccion;
            $newUser->di = $request->di;
            $newUser->image_url = $request->image_url;
            $newUser->email = $request->email;
            $newUser->password =$request->password;
            if ($newUser->save()) {
                return response()->json(
                    array("message" => "Bienvenido " . $request->fullname),
                    201,
                    [],
                    256
                );
            } else {
                return response()->json(
                    array("message" => "$request->fullname asegurate de llenar los datos correctamente."),
                    400,
                    [],
                    256
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria)
    {
        //
    }
}
