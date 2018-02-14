<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugare extends Model
{
    protected $fillable = [
        'categoria_id',
        'razon_social',
        'descripcion',
        'lat',
        'lon',
        'telefono',
        'direccion',
        'ofertas',
        'horario_apertura',
        'horario_cierre',
        'redes',
        'image_url'
    ];
}
