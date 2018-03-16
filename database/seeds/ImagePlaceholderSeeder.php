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

        'image'             =>  'film.png',

        ]);

        App\Image::create ([

        'image'             =>  'user.png',

        ]);

        App\Image::create ([

        'image'             =>  'category.png',

        ]);

        App\Image::create ([

    	'image'				=>	'language.png',

        ]);
    }
}
