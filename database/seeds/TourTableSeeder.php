<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Tour;
use App\TourImage;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 3)->create();
        factory(Tour::class, 10)->create();
        factory(TourImage::class, 10)->create();

    }
}