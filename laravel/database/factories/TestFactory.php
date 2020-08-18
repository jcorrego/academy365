<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(\App\Test::class, function (Faker $faker) {
    return [
        'course_id' => 1,
    ];
});
