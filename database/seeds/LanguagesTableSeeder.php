<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Language::create ([

        	'name' 	=> 	'English',
        	'slug'		=>	'english',
        	'image'		=>	'english.svg'
        ]);
       
       
        App\Language::create ([

        	'name' 	=> 	'German',
        	'slug'		=>	'german',
        	'image'		=>	'german.svg'
        ]);
       
       
        App\Language::create ([

        	'name' 	=> 	'Spanish',
        	'slug'		=>	'spanish',
        	'image'		=>	'spanish.svg'
        ]);
       
       
        App\Language::create ([

        	'name' 	=> 	'French',
        	'slug'		=>	'french',
        	'image'		=>	'french.svg'
        ]);
       
       
        App\Language::create ([

        	'name' 	=> 	'Italian',
        	'slug'		=>	'italian',
        	'image'		=>	'italian.svg'
        ]);
       
       
        App\Language::create ([

        	'name' 	=> 	'Chinese',
        	'slug'		=>	'chinese',
        	'image'		=>	'chinese.svg'
        ]);
       
    }
}
