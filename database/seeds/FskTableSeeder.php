<?php

use Illuminate\Database\Seeder;

class FskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        App\Fsk::create ([

        	'fsk' 		=> 	'Approved for 0',
        	'slug'		=>	'approved-0',
        	'image'		=>	'fsk-0.jpg',

        ]);
       
        App\Fsk::create ([

        	'fsk' 		=> 	'Approved for 6',
        	'slug'		=>	'approved-6',
        	'image'		=>	'fsk-6.jpg',

        ]);
       
        App\Fsk::create ([

        	'fsk' 		=> 	'Approved for 12',
        	'slug'		=>	'approved-12',
        	'image'		=>	'fsk-12.jpg',

        ]);
       
        App\Fsk::create ([

        	'fsk' 		=> 	'Approved for 16',
        	'slug'		=>	'approved-16',
        	'image'		=>	'fsk-16.jpg',

        ]);
       
        App\Fsk::create ([

        	'fsk' 		=> 	'Approved for 18',
        	'slug'		=>	'approved-18',
        	'image'		=>	'fsk-18.jpg',

        ]);
    }
}
