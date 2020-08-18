<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class)->create([
                                             'name'     => 'Utpal N Upadhyay',
                                             'email'    => 'utpal@catking.in',
                                             'password' => bcrypt('password'),
                                             'type'     => 'admin',
                                         ]);
        factory(App\User::class)->create([
                                             'name'     => 'Juan Carlos Orrego',
                                             'email'    => 'jcorrego@gmail.com',
                                             'password' => bcrypt('password'),
                                             'type'     => 'admin',
                                         ]);
        factory(App\User::class)->create([
                                             'name'     => 'Suyash Nehwal',
                                             'email'    => 'ssnitro11@gmail.com',
                                             'password' => '0a0dd9a18fa4c5e510a736590ebfa432',
                                             'type'     => 'student',
                                         ]);
        factory(App\User::class, 5)->create();
    }
}
