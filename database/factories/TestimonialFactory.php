<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'https://placeimg.com/72/72/people?' . rand(),
        'content' => $faker->text
    ];
});
