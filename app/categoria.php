<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable=['nombre','grupo_id','image_url'];
    
}
