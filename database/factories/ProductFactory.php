<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipment;
use Faker\Generator as Faker;

$factory->define(Equipment::class, function (Faker $faker) {

    $images = [
        'featured_1.png',
        'featured_2.png',
        'featured_3.png',
        'featured_4.png',
        'featured_5.png',
        'featured_6.png',
        'featured_7.png',
        'featured_8.png',
    ];


    return [
        'equipName' => $faker->word,
        'equipType' => $faker->word,
        'equipPrice' => $faker->numberBetween($min = 1, $max = 20),
        'equipQuantity' => $faker->numberBetween($min = 1, $max = 10000),
        'staff_id' => 1234,

    ];
});
