<?php

use App\Oferta;
use Faker\Generator as Faker;

$factory->define(Oferta::class, function (Faker $faker) {
	$precio=rand(100,200);
	$precio_promocion=$precio*0.85;
    return [
            'lugar_id'=>rand(1,100),
            'producto'=>$faker->jobTitle(),
            'descripcion'=>$faker->text(),
            'cupon'=>$faker->text(5),
            'precio_regular'=>$precio,
            'precio_promocion'=>$precio_promocion,
            'descuento'=>15,
            'fecha_inicio'=>$faker->date(),
            'fecha_fin'=>$faker->date(),
            'image_url'=>$faker->imageUrl($width = 640, $height = 480),
            'condiciones'=>$faker->text()
    ];
});
