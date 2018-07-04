<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class evento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
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
