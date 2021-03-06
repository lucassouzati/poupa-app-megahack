<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Receita;
use Faker\Generator as Faker;

$factory->define(Receita::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'valor' => $faker->word,
        'data' => $faker->word,
        'efetuada' => $faker->word,
        'categoria_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
