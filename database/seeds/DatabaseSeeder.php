<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ImagePlaceholderSeeder::class);        
        $this->call(FskTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);

    }
}
