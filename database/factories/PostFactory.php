<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $user = App\User::inRandomOrder()->first()->id;

    return [
        'author_id' => $user,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'slug' => Str::slug($faker->unique()->sentence),
        'active' => 1,
    ];
});
