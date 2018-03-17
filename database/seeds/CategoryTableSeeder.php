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
        	'category' 		=> 	'Action',
        	'slug'			=>	'action',
        	'description'	=>	'Action Films',
        	'image_id'		=>	'5'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Adventure',
        	'slug'			=>	'adventure',
        	'description'	=>	'Adventure Films',
        	'image_id'		=>	'6'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Animate',
        	'slug'			=>	'animate',
        	'description'	=>	'Animate Films',
        	'image_id'		=>	'7'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Comedy',
        	'slug'			=>	'comedy',
        	'description'	=>	'Comedy Films',
        	'image_id'		=>	'8'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Crime / Ganster',
        	'slug'			=>	'crime-ganster',
        	'description'	=>	'Crime / Ganster Films',
        	'image_id'		=>	'9'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Drama',
        	'slug'			=>	'drama',
        	'description'	=>	'Drama Films',
        	'image_id'		=>	'10'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Fantasy',
        	'slug'			=>	'fantasy',
        	'description'	=>	'fantasy Films',
        	'image_id'		=>	'11'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Fairy Tale',
        	'slug'			=>	'fairy-tale',
        	'description'	=>	'Fairy Tale Films',
        	'image_id'		=>	'12'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Epic / historical',
        	'slug'			=>	'epic-historical',
        	'description'	=>	'Epic / historical Films',
        	'image_id'		=>	'13'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Historical fiction',
        	'slug'			=>	'historical-fiction',
        	'description'	=>	'Historical fiction Films',
        	'image_id'		=>	'14'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Horror',
        	'slug'			=>	'horror',
        	'description'	=>	'Horror Films',
        	'image_id'		=>	'15'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Love Story',
        	'slug'			=>	'love-story',
        	'description'	=>	'Love Story Films',
        	'image_id'		=>	'16'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Musical / Dance',
        	'slug'			=>	'musical-dance',
        	'description'	=>	'Musical / Dance Films',
        	'image_id'		=>	'17'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Mistery',
        	'slug'			=>	'mistery',
        	'description'	=>	'mistery Films',
        	'image_id'		=>	'18'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Paranoid / Paranormal',
        	'slug'			=>	'paranoid-paranormal',
        	'description'	=>	'Paranoid / Paranormal Films',
        	'image_id'		=>	'19'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Scince Fiction',
        	'slug'			=>	'scince-fiction',
        	'description'	=>	'Scince Fiction Films',
        	'image_id'		=>	'20'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Western',
        	'slug'			=>	'western',
        	'description'	=>	'Western Films',
        	'image_id'		=>	'21'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Martial arts',
        	'slug'			=>	'martial-arts',
        	'description'	=>	'Martial arts Films',
        	'image_id'		=>	'22'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Documentation',
        	'slug'			=>	'documentation',
        	'description'	=>	'Documentation Films',
        	'image_id'		=>	'23'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Kids',
        	'slug'			=>	'kids',
        	'description'	=>	'Kids Films',
        	'image_id'		=>	'24'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Biography',
        	'slug'			=>	'biography',
        	'description'	=>	'Biography Films',
        	'image_id'		=>	'25'
        ]);

                App\Category::create ([
        	'category' 		=> 	'War / Military',
        	'slug'			=>	'war-military',
        	'description'	=>	'War / Military Films',
        	'image_id'		=>	'26'
        ]);

                App\Category::create ([
        	'category' 		=> 	'Thriller',
        	'slug'			=>	'thriller',
        	'description'	=>	'Thriller Films',
        	'image_id'		=>	'27'
        ]);

                App\Category::create ([
        	'category' 		=> 	'TV Series',
        	'slug'			=>	'tv-series',
        	'description'	=>	'TV Series',
        	'image_id'		=>	'28'
        ]);

    }
}
