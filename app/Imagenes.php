<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagenes extends Model
{
    use SoftDeletes;
    protected $fillable=['lugar_id','img'];
    protected $dates = ['deleted_at'];
}
