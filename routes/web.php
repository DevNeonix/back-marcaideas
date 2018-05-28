<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});
Route::post('subirimagen', function (Request $request) {
    $file = $request->file('file');
    $nombre = $file->getClientOriginalName();

    Storage::disk('local')->put($nombre, File::get($file));
    return response()->json(array("url"=>"C:\Users\andre\Documents\GitHub\back-marcaideas\storage\images\\".$nombre),200);
});
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    return "<img src='".$filename."' alt='' title='' />";
});