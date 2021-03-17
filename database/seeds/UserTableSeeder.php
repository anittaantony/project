<?php


use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = \App\User::create([
            'Name'           => 'John',
            'Fk_department'  => 1,
            'Fk_designation' => 1,
            'Phone_number'   => '123456',
            
        ]); 

        $user = \App\User::create([
            'Name'           => 'Tommy',
            'Fk_department'  => 2,
            'Fk_designation' => 2,
            'Phone_number'   => '123456',
            
        ]); 

        $user = \App\User::create([
            'Name'           => 'Manu',
            'Fk_department'  => 3,
            'Fk_designation' => 3,
            'Phone_number'   => '123456',
            
        ]); 
    }
}
