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


// foreach($venues as $venue){$venue->categories()->attach($category->id);}
// foreach($venues as $venue){$venue->features()->attach($feature->id);}