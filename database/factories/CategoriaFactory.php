<?php

use App\categoria;
use Faker\Generator as Faker;

$factory->define(categoria::class, function (Faker $faker) {
    return [
    	'grupo_id'=>rand(1,50),
        'nombre'=>$faker->jobTitle(),
        'image_url'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
