<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Order;
use App\Billing;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => User::first()->id,
		'billing_id' => Billing::latest()->first()->id,
		'total' => $faker->numberBetween(1000,2000),
		'status' => $faker->randomElement(['delivered', 'pending']),
    ];
});
