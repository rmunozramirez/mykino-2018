<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create ([
            'name' =>  'Guest',
            'slug'  =>  'guest',
        ]); 

        App\Role::create ([
            'name' =>  'Invited',
            'slug'  =>  'invited',
        ]);   
                             
		 App\Role::create ([
            'name' =>  'Admin',
        	'slug'  => 	'admin',
        ]);   

         App\Role::create ([
            'name' =>  'Super admin',
            'slug'  =>  'super_admin',
        ]);
         
    }
}
