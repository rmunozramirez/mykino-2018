<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        App\Gender::create ([

        	'name' 		=> 	'Femenine',
        	'slug'		=>	'femenine',

        ]);

        App\Gender::create ([

        	'name' 		=> 	'Masculine',
        	'slug'		=>	'masculine',

        ]);

    }
}
