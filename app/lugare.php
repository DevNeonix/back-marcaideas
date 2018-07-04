<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lugare extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'categoria_id',
        'razon_social',
        'descripcion',
        'lat',
        'lon',
        'telefono',
        'direccion',
        'horario_apertura',
        'horario_cierre',
        'redes',
        'image_url'
    ];
}
