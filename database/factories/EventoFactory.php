<?php

use App\evento;
use Faker\Generator as Faker;

$factory->define(evento::class, function (Faker $faker) {
    return [
        	'nombre'=>$faker->jobTitle(),
            'descripcion'=>$faker->text(),
            'image_url'=>$faker->imageUrl($width = 640, $height = 480),
            'fecha_inicio'=>$faker->date(),
            'fecha_fin'=>$faker->date(),
            'lat'=>$faker->latitude(),
            'lon'=>$faker->longitude(),
            'ubicacion'=>$faker->address()
    ];
});
