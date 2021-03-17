<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name'       => 'John',
            'lastname'   => 'Doe',
            'username'   => 'admin',
            'email'      => 'admin@gmail.com',
            'phone'    => '1',
            'password'   => bcrypt('123456'),
      
        ]);
    }
}
