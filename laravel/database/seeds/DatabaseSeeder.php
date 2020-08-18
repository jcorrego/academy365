<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(CourseSeeder::class);
         $this->call(ModuleSeeder::class);
         $this->call(OrderSeeder::class);
         $this->call(TestSeeder::class);
         
    }
}
