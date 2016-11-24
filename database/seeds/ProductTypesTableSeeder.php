<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!ProductType::where('name', 'One')->first()) {
            ProductType::create([
                'name' => 'One',
                'description' => 'description of product type: One'
            ]);
        }
    }
}
