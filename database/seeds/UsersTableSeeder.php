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
        User::create([
            'name' => 'Geraldo',
            'email' => 'geraldo.landre@gmail.com',
            'password' => bcrypt('123456'),
            'is_super' => true
        ]);

        User::create([
            'name' => 'Mike',
            'email' => 'mike.g.moll@gmail.com',
            'password' => bcrypt('123456'),
            'is_super' => false
        ]);
    }
}
