<?php
use App\lugare;

Route::resource('users', 'UserController');
Route::post('login', 'UserController@login');
Route::resource('grupos', 'GrupoController');
Route::resource('lugares', 'LugareController');
Route::resource('eventos', 'EventoController');
Route::resource('categorias', 'CategoriaController');
Route::resource('ofertas', 'OfertaController');
Route::resource('imagenes', 'ImagenesController');
Route::get('lugar/{id}', function ($id) {
    $data = lugare::where('id', "$id")->first();
    return response()->json($data, 200, [], 256);
});
