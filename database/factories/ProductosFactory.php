<?php

use Faker\Generator as Faker;

$factory->define(App\Productos::class, function (Faker $faker) {
    return [
        'producto_nombre'        => substr($faker->sentence(2), 0, -1),
        'producto_marca'         => substr($faker->sentence(2), 0, -1),
        'producto_codigo_barras' => substr($faker->sentence(2), 0, -1),
        'producto_descripcion'   => substr($faker->sentence(2), 0, -1)
    ];
});
