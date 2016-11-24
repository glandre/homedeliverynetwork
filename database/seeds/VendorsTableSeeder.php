<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Vendor::where('name', 'BC Bud Brokers')->first()) {
            Vendor::create([
                'name' => 'BC Bud Brokers',
                'description' => 'We supply everything, you name it, we\'ve got it!'
            ]);
        }
    }
}
