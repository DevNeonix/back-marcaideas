<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
Route::get('/', function () {
    return view('welcome');
});
Route::post('subirimagen', function (Request $request) {
    $ruta = public_path().'/img/';
    $imagenOriginal = $request->file('file');
    $imagen = Image::make($imagenOriginal);
    $temp_name = $request->nombre."".str_random(5) . '.' . $imagenOriginal->getClientOriginalExtension();
    $imagen->resize(300,300);
    $imagen->save($ruta . $temp_name, 100);

    $imagenes = new App\Imagenes();
    $imagenes->lugar_id=$request->lugar;
    $imagenes->img="http://localhost:8000/img/".$temp_name;
    $imagenes->save();
    return response()->json(array("url"=>"http://localhost:8000/img/".$temp_name));
    //return response()->json($request);

});
Route::get('storage/images/{filename}', function ($filename)
{
    $path = storage_path('images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    return "<img src='".$filename."' alt='' title='' />";
});