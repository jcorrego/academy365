<?php

use App\Models\Tests\Question;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Test::class)->create();
        factory(Question::class, 10)->create();
    }
}
