<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use App\Brand;
use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=> Category::first()->id,
		'brand_id'=> Brand::first()->id,
		'admin_id'=> Admin::first()->id,
		'title'=> $faker->text(20),
		'storage'=> $faker->randomDigit(),
		'price'=> $faker->numberBetween(100,1000),
		'discount'=> $faker->numberBetween(5,50),
		'sort_desc'=> $faker->text(100),
		'long_desc'=> $faker->text(300),
		'status'=> $faker->numberBetween(0,1),
    ];
});
