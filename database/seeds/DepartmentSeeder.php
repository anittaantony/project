<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = \App\Department::create([
			'Name' 	         => 'Marketing Manager',
			
            
		]);	

		$user = \App\Department::create([
			'Name' 	         => 'Mobile Appilcation Dev',
			
            
		]);	

		$user = \App\Department::create([
			'Name' 	         => 'Software Developer',
			
            
		]);	

    }
}
