<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=['nombre','grupo_id','image_url'];
    
}
