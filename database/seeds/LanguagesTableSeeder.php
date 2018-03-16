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

        	'language' 	=> 	'English',
        	'slug'		=>	'english',
        	'image'		=>	'english.jpg'
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'German',
        	'slug'		=>	'german',
        	'image'		=>	'german.jpg'
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Spanish',
        	'slug'		=>	'spanish',
        	'image'		=>	'spanish.jpg'
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'French',
        	'slug'		=>	'french',
        	'image'		=>	'french.jpg'
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Italian',
        	'slug'		=>	'italian',
        	'image'		=>	'italian.jpg'
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Chinese',
        	'slug'		=>	'chinese',
        	'image'		=>	'chinese.jpg'
        ]);
       
    }
}
