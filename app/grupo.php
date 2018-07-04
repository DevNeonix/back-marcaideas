<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class grupo extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre', 'image_url'];

}
