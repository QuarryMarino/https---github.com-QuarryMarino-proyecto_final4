<?php

namespace Database\Factories;

use App\Models\Bitacora;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Bitacora::class, function (Factory $factory) {

    return [
        'id_usuario'=>Bitacora::inRandomOrder()->first()->id,
            'bitacora'=>fake()->text(),
            'fecha'=>fake()->date(),
            'hora'=>fake()->time(),
            'ip'=>fake()->random_int(),
            'so'=>fake()->word(),
            'navegador'=>fake()->word(),
            'usuario'=>fake()->firstName()
    ];
});

