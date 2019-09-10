<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TourImage;
use Faker\Generator as Faker;

$factory->define(TourImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250,250),
        'tour_id' => $faker->numberBetween(1,10)
        // 'category_id' => $faker->numberBetween(1,3)

    ];
});
