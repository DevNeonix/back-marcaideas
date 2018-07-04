<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oferta extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'lugar_id',
        'producto',
        'descripcion',
        'cupon',
        'precio_regular',
        'precio_promocion',
        'descuento',
        'fecha_inicio',
        'fecha_fin',
        'image_url',
        'condiciones',
    ];
    protected $dates = ['deleted_at'];
}
