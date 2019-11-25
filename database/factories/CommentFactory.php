<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => function() {
            return factory(Post::class)->create()->id;
        },
        'body' => $faker->paragraph
    ];
});
