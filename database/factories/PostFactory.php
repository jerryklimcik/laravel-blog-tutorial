<?php

use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->slug(3),
        'content' => $faker->paragraph,
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'category_id' => function() {
            return factory(Category::class)->create()->id;
        }
    ];
});
