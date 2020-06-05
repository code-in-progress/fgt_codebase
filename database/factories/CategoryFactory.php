<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->unique()->word(),
        'created_by' => App\User::inRandomOrder()->first()->id,
    ];
});
