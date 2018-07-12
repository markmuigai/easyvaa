<?php

use Illuminate\Database\Seeder;
use App\Feature;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Feature::create([
        	'name' => 'Outdoor Seating Area'
        ]);

        Feature::create([
        	'name' => 'Garden ideal for shooting'
        ]);

        Feature::create([
        	'name' => 'Country cottage house in the back drop'
        ]);

        Feature::create([
        	'name' => 'washrooms and sufficient parking'
        ]);

        Feature::create([
        	'name' => 'Outside catering is allowed'
        ]);

        Feature::create([
        	'name' => 'Kitchen Area'
        ]);

        Feature::create([
        	'name' => 'Power Source Available'
        ]);

        Feature::create([
        	'name' => 'Security'
        ]);

        Feature::create([
        	'name' => 'Night events are allowed'
        ]);

        Feature::create([
        	'name' => 'Shower Facilities'
        ]);

    }
}


         //    'features' => ['Two well manicured gardens with creative outdoor fixtures.',
	        //     'Two outdoor seating areas.',
	        //     'The back garden has natural vegetation ideal for shooting.',
	        //     'Country cottage house in the back drop.',
	        //     'The living room area only provided during an engagement shoot.'
        	// ],
       // 	// 'features' => ['The cut off time for events is 6.30pm',
        // 	// 	'The venue has washrooms and sufficient parking',
        // 	// 	'There is access to power and water',
        // 	// 	'There is a small area that can be used for the church ceremony separate from the reception area',
        // 	// 	'A kitchen facility is available for the caterer to use',
        // 	// ],
        // 	// 'features' => ['The gardens are purely garden hire only.',
        // 	// 	'Outside catering is allowed.',
        // 	// 	'There is power, water, kitchen area, washrooms and outdoor hand washing area.',
        // 	// 	'Parking is available.',
        // 	// 	'Set down is by 10am the following day after the event.',
        // 	// 	'Night events are allowed. However, there is an additional cost for night time security guards.',
        // 	// ],
        // 	'features' => ['Two garden areas',
        // 		'Washrooms for both gents and ladies, inclusive of shower facilities',
        // 		'Access to power and water',
        // 		'Kitchen area',
        // 		'Storage area',
        // 		'Parking',
        // 		'Furthermore, the garden is provided on a self catering basis which allows each client to use their own caterer, decor and set up supplier according to their preferred event theme.',
        // 	],
// receptions at close-by venues such as:',
//         // 	// 'features' => ['Power Source',
//         // 	// 	'Parking Lot',
//         // 	// 	'Washroom',
//         // 	// 	'Security',
//         // 	// 	'Garden Parasols',
//         // 	// 	'Swings',
//         // 	// ],