<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tour;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) { 
      return [
        'name' => $faker->word,
        'description' => $faker->sentence(10),
        'price' => $faker->randomFloat(2,250,1000),
        'reservations' => $faker->randomFloat(0,0,15),
        'category_id' => $faker->numberBetween(1,3)
    ];
});
