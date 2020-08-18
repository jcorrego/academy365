<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;
use App\Models\Tests\Question;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'test_id' => 1,
        'name'=>$faker->sentence,
        'description'=>$faker->paragraph,
        'options'=>[$faker->word,$faker->word,$faker->word,$faker->word],
        'answer'=> rand(0,3)
    ];
});
