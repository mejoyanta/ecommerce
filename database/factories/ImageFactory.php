<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'product_id'=> Product::first()->id,
		'sm_img'=> $faker->imageUrl(260,414),
		'lg_img'=> $faker->imageUrl(1000,1300),
    ];
});
