<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create ([
        	'name' 		     => 	'Action',
        	'slug'			=>	'action',
        	'description'	=>	'Action Films',
        	'image_id'		=>	'5'
        ]);

                App\Category::create ([
        	'name' 		  => 	'Adventure',
        	'slug'			=>	'adventure',
        	'description'	=>	'Adventure Films',
        	'image_id'		=>	'6'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Animate',
        	'slug'			=>	'animate',
        	'description'	=>	'Animate Films',
        	'image_id'		=>	'7'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Comedy',
        	'slug'			=>	'comedy',
        	'description'	=>	'Comedy Films',
        	'image_id'		=>	'8'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Crime / Ganster',
        	'slug'			=>	'crime-ganster',
        	'description'	=>	'Crime / Ganster Films',
        	'image_id'		=>	'9'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Drama',
        	'slug'			=>	'drama',
        	'description'	=>	'Drama Films',
        	'image_id'		=>	'10'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Fantasy',
        	'slug'			=>	'fantasy',
        	'description'	=>	'fantasy Films',
        	'image_id'		=>	'11'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Fairy Tale',
        	'slug'			=>	'fairy-tale',
        	'description'	=>	'Fairy Tale Films',
        	'image_id'		=>	'12'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Epic / historical',
        	'slug'			=>	'epic-historical',
        	'description'	=>	'Epic / historical Films',
        	'image_id'		=>	'13'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Historical fiction',
        	'slug'			=>	'historical-fiction',
        	'description'	=>	'Historical fiction Films',
        	'image_id'		=>	'14'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Horror',
        	'slug'			=>	'horror',
        	'description'	=>	'Horror Films',
        	'image_id'		=>	'15'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Love Story',
        	'slug'			=>	'love-story',
        	'description'	=>	'Love Story Films',
        	'image_id'		=>	'16'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Musical / Dance',
        	'slug'			=>	'musical-dance',
        	'description'	=>	'Musical / Dance Films',
        	'image_id'		=>	'17'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Mistery',
        	'slug'			=>	'mistery',
        	'description'	=>	'mistery Films',
        	'image_id'		=>	'18'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Paranoid / Paranormal',
        	'slug'			=>	'paranoid-paranormal',
        	'description'	=>	'Paranoid / Paranormal Films',
        	'image_id'		=>	'19'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Scince Fiction',
        	'slug'			=>	'scince-fiction',
        	'description'	=>	'Scince Fiction Films',
        	'image_id'		=>	'20'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Western',
        	'slug'			=>	'western',
        	'description'	=>	'Western Films',
        	'image_id'		=>	'21'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Martial arts',
        	'slug'			=>	'martial-arts',
        	'description'	=>	'Martial arts Films',
        	'image_id'		=>	'22'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Documentation',
        	'slug'			=>	'documentation',
        	'description'	=>	'Documentation Films',
        	'image_id'		=>	'23'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Kids',
        	'slug'			=>	'kids',
        	'description'	=>	'Kids Films',
        	'image_id'		=>	'24'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Biography',
        	'slug'			=>	'biography',
        	'description'	=>	'Biography Films',
        	'image_id'		=>	'25'
        ]);

                App\Category::create ([
        	'name' 		=> 	'War / Military',
        	'slug'			=>	'war-military',
        	'description'	=>	'War / Military Films',
        	'image_id'		=>	'26'
        ]);

                App\Category::create ([
        	'name' 		=> 	'Thriller',
        	'slug'			=>	'thriller',
        	'description'	=>	'Thriller Films',
        	'image_id'		=>	'27'
        ]);

                App\Category::create ([
        	'name' 		=> 	'TV Series',
        	'slug'			=>	'tv-series',
        	'description'	=>	'TV Series',
        	'image_id'		=>	'28'
        ]);

    }
}
