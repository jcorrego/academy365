<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        factory(App\Course::class, 1)->create(
            [
                'name'        => 'Wordpress',
                'description' => 'Master the art of the “WordPress CMS System” which is used by 1/3rd of the internet!',
                'order'       => 1,
            ]
        );
    }
}
