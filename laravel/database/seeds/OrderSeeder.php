<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        factory(Order::class)->create([
                                          'email' => 'ssnitro11@gmail.com',
                                      ]);
    }
}
