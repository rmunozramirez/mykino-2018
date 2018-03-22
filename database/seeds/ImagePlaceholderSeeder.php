<?php

use Illuminate\Database\Seeder;

class ImagePlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Image::create ([

        'image'     =>  'film.png',
        'film_id'   =>  '0',
        'actor_id'   =>  '0',
        'category_id'   =>  '0',

        ]);

        App\Image::create ([

        'image'     =>  'user.png',
        'film_id'   =>  '0',
        'actor_id'   =>  '0',
        'category_id'   =>  '0',

        ]);

        App\Image::create ([

        'image'     =>  'category.png',
        'film_id'   =>  '0',
        'actor_id'   =>  '0',
        'category_id'   =>  '0',

        ]);

        App\Image::create ([

    	'image'	    =>	'language.png',
        'film_id'   =>  '0',
        'actor_id'   =>  '0',
        'category_id'   =>  '0',

        ]);
    }
}
