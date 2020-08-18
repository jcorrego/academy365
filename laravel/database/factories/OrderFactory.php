<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'email'     => $faker->unique()->safeEmail,
        'wp_order'  => $faker->word,
        'course_id' => 1,
    ];
});
