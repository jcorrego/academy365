<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Module;
use Faker\Generator as Faker;

$factory->define(Module::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'course_id' => 1,
        'order' => 1,
        'video' => $faker->url,
    ];
});
