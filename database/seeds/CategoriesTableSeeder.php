<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'wedding'
        ]);

        Category::create([
        	'name' => 'Corporate event'
        ]);

        Category::create([
        	'name' => 'Proposal Venue'
        ]);

        Category::create([
        	'name' => 'Photo Shoot'
        ]);

        Category::create([
        	'name' => 'Tea Party'
        ]);

        Category::create([
        	'name' => 'Workshop'
        ]);

        Category::create([
        	'name' => 'Crafts and fair'
        ]);

        Category::create([
        	'name' => 'Art exhibition'
        ]);

        Category::create([
        	'name' => 'Musical Event'
        ]);

        Category::create([
        	'name' => 'Filming location'
        ]);
    }
}
