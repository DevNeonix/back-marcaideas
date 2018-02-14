<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


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
