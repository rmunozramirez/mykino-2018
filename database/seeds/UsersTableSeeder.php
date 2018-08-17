<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create ([

        	'name' 		=> 	'Rafael Muñoz',
        	'email'		=>	'rafaelmunoznl@yahoo.com',
        	'password'	=>	bcrypt('Password'),
            'role_id'   =>  4,

        ]);
    }
}
