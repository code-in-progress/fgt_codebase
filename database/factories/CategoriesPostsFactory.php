<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\CategoriesPosts;
use App\Category;
use App\Post;

$factory->define(CategoriesPosts::class, function (Faker $faker) {
    return [
        'categories_id' => Category::inRandomOrder()->first()->id,
        'posts_id' => Post::inRandomOrder()->first()->id,
    ];
});
