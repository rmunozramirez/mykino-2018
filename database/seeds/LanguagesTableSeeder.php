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
        	'image'		=>	'english.svg',
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'German',
        	'slug'		=>	'german',
        	'image'		=>	'german.svg',
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Spanish',
        	'slug'		=>	'spanish',
        	'image'		=>	'spanish.svg',
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'French',
        	'slug'		=>	'french',
        	'image'		=>	'french.svg',
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Italian',
        	'slug'		=>	'italian',
        	'image'		=>	'italian.svg',
        ]);
       
       
        App\Language::create ([

        	'language' 	=> 	'Chinese',
        	'slug'		=>	'chinese',
        	'image'		=>	'chinese.svg',
        ]);
       
    }
}
