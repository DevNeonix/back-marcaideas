<?php

use App\lugare;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('users','UserController');
Route::post('login','UserController@login');
Route::resource('grupos','GrupoController');
Route::resource('lugares','LugareController');
Route::resource('eventos','EventoController');
Route::resource('categorias','CategoriaController');
Route::resource('ofertas','OfertaController');
Route::get('lugar/{id}',function($id){
    $data=lugare::where('id',"$id")->first();
    return response()->json($data, 200, [], 256);
});
