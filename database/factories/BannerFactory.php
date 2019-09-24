<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'image' => 'https://placeimg.com/1000/600/tech?' . rand(),
        'title' => $faker->sentence(3),
        'subtitle' => $faker->sentence(6),
        'description' => $faker->sentence(12),
        'position' => 1,
        'link' => '#'
    ];
});
