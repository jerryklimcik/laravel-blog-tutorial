<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->slug(3),
    ];
});
