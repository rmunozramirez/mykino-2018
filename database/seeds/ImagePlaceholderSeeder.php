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

        'image_name'        =>  'Films',
        'slug'              =>  'film.png',
        'alt'               =>  'films image', 
        'about'             =>  'About films',

        ]);

        App\Image::create ([

        'image_name'        =>  'Categories',
        'slug'              =>  'category.png',
        'alt'               =>  'Categories image', 
        'about'             =>  'About categories',

        ]);

        App\Image::create ([

        'image_name'        =>  'Languages',
        'slug'              =>  'language.png',
        'alt'               =>  'Languages image', 
        'about'             =>  'About languages',

        ]);

        App\Image::create ([

        'image_name'        =>  'Users',
        'slug'              =>  'user.png',
        'alt'               =>  'Users image', 
        'about'             =>  'About users',

        ]);

        App\Image::create ([

        'image_name'        =>  'Rafael',
        'slug'              =>  'rafael.jpg',
        'alt'               =>  'Rafael, el creador de esto', 
        'about'             =>  'Rafael, el creador de esto',

        ]);

    }
}
