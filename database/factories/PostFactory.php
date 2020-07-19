<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'pic' => '/img/education.jpg',
        'short_desc' => $faker->text(30),
        'body' => null,
    ];
});
