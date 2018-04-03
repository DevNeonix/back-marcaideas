<?php

use Faker\Generator as Faker;

$factory->define(\App\Imagenes::class, function (Faker $faker) {
    return [
        'lugar_id'=>rand(1,100),
        'img'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
