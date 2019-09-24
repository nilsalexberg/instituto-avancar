<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partner;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'role' => $faker->word,
        'image' => 'https://placeimg.com/180/180/people?' . rand()
    ];
});
