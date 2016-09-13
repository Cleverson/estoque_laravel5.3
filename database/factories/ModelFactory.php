<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Produto::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->sentence(2),
        'descricao' => $faker->sentence(10),
        'preco_custo' => $faker->numberBetween(1,50),
        'preco_venda' =>$faker->numberBetween(4,120),
        'categoria_id' =>$faker->numberBetween(1,3),
    ];
});
