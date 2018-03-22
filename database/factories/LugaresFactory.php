<?php

use App\lugare;
use Faker\Generator as Faker;

$factory->define(lugare::class, function (Faker $faker) {
    return [
        	'categoria_id'=>rand(1,100),
            'razon_social'=>$faker->lastName(),
            'descripcion'=>$faker->text($maxNbChars=200),
            'lat'=>$faker->latitude($min = -90, $max = 90),
            'lon'=>$faker->longitude($min = -180, $max = 180),
            'telefono'=>$faker->e164PhoneNumber(),
            'horario_apertura'=>$faker->time($format = 'H:i:s', $max = 'now'),
            'horario_cierre'=>$faker->time($format = 'H:i:s', $max = 'now'),
            'redes'=>'',
            'direccion'=>$faker->address(),
            'ubicacion'=>$faker->country(),
            'image_url'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
