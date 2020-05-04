<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Billing;
use Faker\Generator as Faker;

$factory->define(Billing::class, function (Faker $faker) {
    return [
    	'user_id' => User::first()->id,
    	'fname'=>$faker->firstName,
		'lname'=>$faker->lastName,
		'company'=>$faker->company,
		'country'=>$faker->country,
		'street_address'=>$faker->streetAddress,
		'town'=>$faker->city,
		'state'=>$faker->state,
		'phone'=>$faker->e164PhoneNumber,
		'email'=>$faker->safeEmail,
		'ship_fname'=>$faker->firstName,
		'ship_lname'=>$faker->lastName,
		'ship_company'=>$faker->company,
		'ship_country'=>$faker->country,
		'ship_street_address'=>$faker->streetAddress,
		'ship_town'=>$faker->city,
		'ship_state'=>$faker->state,
		'ship_phone'=>$faker->e164PhoneNumber,
		'ship_email'=>$faker->safeEmail,
		'order_note'=>$faker->text(100),
    ];
});
