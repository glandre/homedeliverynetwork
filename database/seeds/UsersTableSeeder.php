<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::where('email', 'geraldo.landre@gmail.com')->first()) {
            User::create([
                'name' => 'Geraldo',
                'last_name' => 'B. Landre',
                'email' => 'geraldo.landre@gmail.com',
                'password' => bcrypt(config('app.key')),
                'profile_id' => 1 // super
            ]);
        }

        if(!User::where('email', 'geraldo.landre@homedeliverynetwork.ca')->first()) {
            User::create([
                'name' => 'Geraldo',
                'last_name' => 'B. Landre',
                'email' => 'geraldo.landre@homedeliverynetwork.ca',
                'password' => bcrypt(config('app.key')),
                'profile_id' => 2 // webmaster
            ]);
        }
    }
}
