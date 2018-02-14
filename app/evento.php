<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $fillable=[
        'nombre',
        'descripcion',
        'image_url',
        'fecha_inicio',
        'fecha_fin',
        'lat',
        'lon'
    ];
}
