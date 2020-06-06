<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\PostCategory::class, function (Faker $faker) {
    return [
        'post_id' => App\Post::inRandomOrder()->first()->id,
        'category_id' => App\Category::inRandomOrder()->first()->id
    ];
});
