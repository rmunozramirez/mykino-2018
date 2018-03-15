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
        'imageable_id'      =>  '0',
        'imageable_type'    =>  'placeholder'

        ]);

        App\Image::create ([

        'image'             =>  'user.png',
        'imageable_id'      =>  '0',
        'imageable_type'    =>  'placeholder'

        ]);

        App\Image::create ([

        'image'             =>  'category.png',
        'imageable_id'      =>  '0',
        'imageable_type'    =>  'placeholder'

        ]);

        App\Image::create ([

    	'image'				=>	'language.png',
		'imageable_id'		=>	'0',
        'imageable_type'	=>	'placeholder'

        ]);
    }
}
