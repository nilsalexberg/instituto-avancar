<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'summary' => $faker->sentence(20),
        'image' => 'https://placeimg.com/640/480/any?' . rand(),
        'content' => "<p>$faker->text</p><p>$faker->text</p>"
    ];
});
