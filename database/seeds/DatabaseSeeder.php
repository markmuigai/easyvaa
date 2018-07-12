<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
    }
}


// foreach($venues as $venue){$venue->categories()->attach([1,2,3,4,5]]);}
// foreach($venues as $venue){$venue->features()->attach([1,2,3,4,5]);}

