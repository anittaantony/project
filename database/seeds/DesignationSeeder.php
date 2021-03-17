<?php

use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Designation::create([
			'Name' 	         => 'Sales and Marketing',
			
            
		]);	


          $user = \App\Designation::create([
			'Name' 	         => 'Application Development',
			
            
		]);	

           $user = \App\Designation::create([
			'Name' 	         => 'Developer',
			
            
		]);	

    }
}
