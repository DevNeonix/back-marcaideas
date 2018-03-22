<?php

use App\grupo;
use Faker\Generator as Faker;

$factory->define(grupo::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->jobTitle(),
        'image_url'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
