<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Venue;

class VenuesTableSeeder extends Seeder
{ 

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Venue::create([
            'name' => 'Makena’s Place | Photo Shoot Venue in Karen, Nairobi | VFA',
            'user_id' => '1',
            'description' => 'Makenas Place is a country cottage with mature, expansive and beautiful gardens that can be hired for wedding bridal party photo sessions, baby bump, engagement, couple and family shoots as well as for commercial shoots. To know the cost for each type of photo shoot, please click on the link or scroll down to know all the details about hiring this venue for a shoot.',
            'contact' => '+254734655076',
            'city' => 'Nairobi',
            'address' => 'karen',
            'location_lat' => '-1.315739',
            'location_lng' => '36.689439',
            'basic_info' => 'As a soon to be bride or groom getting married in the Karen area of Nairobi, are you searching for a one of a kind wedding photo shoot venue? If so, then Makena’s Place is the photo shoot location of choice to consider. Furthermore, this venue has two garden spaces filled with unique beautiful outdoor fixtures to give the perfect backdrop for your photos.',

         //    'features' => ['Two well manicured gardens with creative outdoor fixtures.',
	        //     'Two outdoor seating areas.',
	        //     'The back garden has natural vegetation ideal for shooting.',
	        //     'Country cottage house in the back drop.',
	        //     'The living room area only provided during an engagement shoot.'
        	// ],

        	'fee_info' => 'To use Makena’s Place for your wedding bridal party photo session, the rate is Kshs. 20,000 for up to 15pax. An additional 5pax will have an extra cost of Kshs. 300 per person. The maximum bridal party inclusive of children is 20pax. The rate provides a light snack consisting of juice and minimal bitings for the bridal party. If you would like to offer the light refreshment to your photography crew and drivers, please add an extra Kshs. 300 per person. There are two time slots to choose from, that is, 12pm – 4pm or 4pm-7pm. We encourage each bridal party who have selected the first time slot to keep within the set timings and not to inconvenience the next bridal party for the second time slot.',

        	'booking_info' => 'To confirm your booking, you will need to make a 60% deposit and the 40% balance a month to the booking date for wedding photo sessions. For the other type of shoots, the balance is required a week to the shoot date.  Payment is via Lipa na Mpesa Till Number 548771.',
        ]);

        Venue::create([
        	'name' => 'Runda K. Gardens',
        	'user_id' => '2',
         //    'categories' => ['Party',
         //    	'Corporate event',
         //    	'Proposal Venue',
         //    	'Wedding Photo Shoot',
         //    	'Tea Party',
         //    	'Meeting, Seminar or Workshop',
         //    	'Photoshoot',
         //    	'Art Exhibition',
         //    	'Book Launch',
         //    	'Crafts and fair'
        	// ],
        	'description' =>'The Runda K. Gardens is located in Runda, Nairoi and is suitable to host events like weddings, team building, and parties. Evening events are not allowed. Please click on the link or scroll down the page to know more about this garden.',
        	'contact' => '+254734655076',
        	'city' => 'Nairobi',
        	'address' => 'Runda',
        	'location_lat' => '-1.2023876',
        	'location_lng' => '36.7997464',
        	'basic_info' => 'The Runda K. Gardens is a garden venue located in the Runda estate of Nairobi, Kenya. The venue is along Kigwaru Drive , which is off the Northern bypass, and close to the Two Rivers Mall.',
        	// 'features' => ['The cut off time for events is 6.30pm',
        	// 	'The venue has washrooms and sufficient parking',
        	// 	'There is access to power and water',
        	// 	'There is a small area that can be used for the church ceremony separate from the reception area',
        	// 	'A kitchen facility is available for the caterer to use',
        	// ],
        	'booking_info' => 'The garden is open for site visits on weekdays from 8:00 am to 5:00pm. Furthermore, the garden is closed on Sunday’s and public holidays.',

        	'fee_info' => 'The garden can comfortably sit up to 600pax in a restaurant set up. While the venue hire fee is Kshs. 65,000 for weddings. Please inquire about the venue hire fee for all other event types.',
        ]);

        Venue::create([
        	'name' => 'The Venue',
        	'user_id' => '3',
         //    'categories' => ['Party',
         //    	'Corporate event',
         //    	'Proposal Venue',
         //    	'Wedding Photo Shoot',
         //    	'Tea Party',
         //    	'Meeting, Seminar or Workshop',
         //    	'Photoshoot',
         //    	'Crafts and fair',
         //    	'Art exhibition',
         //    	'Musical event',
        	// ],
        	'description' =>'This is a garden venue with two garden areas that can be used to set up for a wedding, birthday or graduation party, team building, baby & bridal showers as well as hired for corporate functions. The first garden can sit 400pax. The wedding venue hire fee is Kshs. 75,000. Please click on the link or scroll down further to know more information about this venue.',
        	'contact' => '+254734655076',
        	'city' => 'Nairobi',
        	'address' => 'Lavington, Hatheru Rd',
        	'location_lat' => '-1.2913708',
        	'location_lng' => '36.7530282',
        	'basic_info' => 'Hidden away in the leafy Lavington suburb, the rare gem that is The Venue @ Lavington awaits you. This venue is located off Hatheru Road, off Gitanga Road, and is an event space with two garden spaces. The first garden can comfortably sit up to 300pax restaurant style. The second garden is more of the parking grounds but can still be used to set up for an event. In addition, this venue has washrooms. Two for ladies and two for gents.',
        	// 'features' => ['',
        	// 	'',
        	// 	'',
        	// 	'',
        	// ],
        	'booking_info' => 'The gardens are open for site visits on Monday, Thursday and Friday from 9:00 am to 5:00pm and on Saturdays from 9:00am to 1:00pm. The gardens are closed on Sunday’s and public holidays.',
        	'fee_info' => '',
        ]);

        Venue::create([
        	'name' => 'Divine Gardens and Resort',
        	'user_id' => '4',
         //    'categories' => ['Party',
         //    	'Corporate event',
         //    	'Proposal Venue',
         //    	'Wedding Photo Shoot',
         //    	'Tea Party',
         //    	'Meeting, Seminar or Workshop',
         //    	'Photoshoot',
         //    	'Filming Location',
         //    	'Crafts and fair',

        	// ],
        	'description' =>'Divine Gardens and Resort is located off Kiambu Road and is suitable to host all outdoor events ranging from weddings, graduation parties, birthday parties, team building and commercial shoots. The gardens can sit up to 600pax. The day garden wedding venue hire fee is Kshs. 65,000. The garden is hired on a self catering basis. That is, you will hire your own tents, tables, chairs and caterer. Click or scroll down for all relevant information about hiring this venue.',
        	'contact' => '+254734655076',
        	'city' => 'Nairobi',
        	'address' => 'Kiambu Rd',
        	'location_lat' => '-1.2115456',
        	'location_lng' => '36.8340434',
        	'basic_info' => 'Divine Gardens and Resort is located along Kiambu Road in Nairobi, Kenya. This venue has two gardens, the first garden can host outdoor events of up to 300pax while the second garden can comfortably sit 600pax restaurant style. Most noteworthy to note about this venue are the supporting event facilities such as washrooms, kitchen area, bar area and outdoor wash area, meaning for a function, hand wash basins do not need to be hired.',

        	// 'features' => ['The gardens are purely garden hire only.',
        	// 	'Outside catering is allowed.',
        	// 	'There is power, water, kitchen area, washrooms and outdoor hand washing area.',
        	// 	'Parking is available.',
        	// 	'Set down is by 10am the following day after the event.',
        	// 	'Night events are allowed. However, there is an additional cost for night time security guards.',
        	// ],
        	// 'booking_info' => '',
        	'fee_info' => 'The garden wedding venue rate is Kshs. 65,000. For weddings that will go past 6pm and up to midnight, an additional Kshs. 10,000 is required. The venue hire fee for team building activies is Kshs.  32,500. Please inquire for the cost of an evening party.'  ,
        ]);

        Venue::create([
        	'name' => 'Inzzu Gardens',
        	'user_id' => '5',
         //    'categories' => ['Party',
         //    	'Corporate event',
         //    	'Proposal Venue',
         //    	'Wedding Photo Shoot',
         //    	'Tea Party',
         //    	'Photoshoot',
         //    	'Musical event',
        	// ],
        	'description' =>'Inzzu gardens is a beautiful venue situated in the serene Kitisuru suburb of Nairobi, suitable for weddings, team buildings, photo shoots, corporate events, birthday and graduation parties.',
        	'contact' => '+254734655076',
        	'city' => 'Nairobi',
        	'address' => 'Kitisuru, Kirawa Rd',
        	'location_lat' => '-1.2274077',
        	'location_lng' => '36.7609402',
        	'basic_info' => 'The maximum sitting capacity restaurant style is 300pax and all events should be over by 6pm. Night events are not allowed. In addition, Inzzu Gardens has a small outdoor kitchen that can be utilized by the caterer to prepare meals for the event. Most noteworthy, the gardens are in a calm, serene and quiet environment away from the hustle and bustle of the city center.',
        	// 'features' => ['Two garden areas',
        	// 	'Washrooms for both gents and ladies, inclusive of shower facilities',
        	// 	'Access to power and water',
        	// 	'Kitchen area',
        	// 	'Storage area',
        	// 	'Parking',
        	// 	'Furthermore, the garden is provided on a self catering basis which allows each client to use their own caterer, decor and set up supplier according to their preferred event theme.',
        	// ],
        	'booking_info' => 'The gardens are open for site visits on Monday, Wednesday, Friday and Saturday between 9 am and 1 pm.',
        	'fee_info' => 'Weddings – Kshs. 65,000,
        	 	Team building – request for the fee.Parties (birthdays, graduation, family events, etc.) – request for the fee.
        	   Wedding Photo Shoot – Kshs. 14,000 for a 3 hour shoot.
        	   Baby bump/engagement/couple/family (nuclear)/girlfriend shoot – Kshs. 6,000 for a 3 hour shoot. 
        	   Video shoots (half day – 4 hrs) – Kshs. 15,000. Extra hours are charged at Kshs. 3,000 per hour Video shoots (full day – 8hrs) – Kshs. 20,000',
        ]);

        Venue::create([
        	'name' => 'Vester Gardens',
        	'user_id' => '7',
         //    'categories' => ['Filming event',
         //    	'Photoshoot',
        	// ],
        	'description' =>'Vester Gardens boasts of sophisticated, chic, well-manicured and mature gardens to provide a picturesque background for memorable engagement, wedding, baby bump, fashion and lifestyle photos.',
        	'contact' => '+254734655076',
        	'city' => 'Nairobi',
        	'address' => 'Runda Grove',
        	'location_lat' => '-1.2101717',
        	'location_lng' => '36.8071271',
        	'basic_info' => 'Situated in one of the leading leafy suburbs in Nairobi County, Vester Gardens boasts of a sophisticated, chic, well-manicured and mature garden. The garden provides a picturesque background for memorable engagement, wedding, baby bump, fashion and lifestyle photos. The gardens are located in Runda Estate, Runda Groove. Furthermore, Vester Gardens makes a perfect and convenient wedding photo shoot location for couples having their wedding ceremonies and receptions at close-by venues such as:',
        	// 'features' => ['Power Source',
        	// 	'Parking Lot',
        	// 	'Washroom',
        	// 	'Security',
        	// 	'Garden Parasols',
        	// 	'Swings',
        	// ],
        	// 'booking_info' => '',
        	'fee_info' => 'Bridal Party Photo Session (up to 2hrs and bridal entourage not exceeding 15pax including photographer and assistants): Instalments(maximum of two) @ Kshs 18,000/=,  One-off payment @ Kshs 16,000/= Add Kshs. 1,000 per every extra group of five.
        		Editorial/ Corporate/ Fashion/ Magazine Shoots:  
        		Half day (8am – 1pm) @ Kshs 20,000/=
        		Full day (8am – 5pm) @ Kshs 30,000/=
        		',
        ]);

        Venue::create([
        	'name' => 'Amani Gardens Inn',
        	'user_id' => '8',
         //    'categories' => ['Party',
         //    	'Corporate event',
         //    	'Proposal Venue',
         //    	'Wedding Photo Shoot',
         //    	'Tea Party',
        	// ],
        	'description' =>'Amani Gardens Inn is both a private party venue and corporate event venue in Nairobi.',
        	'contact' => '+254723161935',
        	//'website' => 'amanigardensinn.com/conference',
        	'city' => 'Nairobi',
        	'address' => 'Lavington, Raphta Rd',
        	'location_lat' => '-1.2633669',
        	'location_lng' => '36.7864725',
        	'basic_info' => 'Amani Gardens Inn is both an outdoor and indoor event venue in Nairobi, Kenya. This venue is located along Rhapta Road in Westlands. It has old English style buildings and is surrounded by ancient trees.',
        	// 'features' => ['',
        	// 	'',
        	// 	'',
        	// 	'',
        	// ],
        	// 'booking_info' => '',
        	'fee_info' => 'For further inquiries and bookings, contact the venue on 723161935. Be sure to let them know that you found their event space on Venyu. ',
        ]);

        // Venue::create([
        // 	'name' => '',
        // 	'categories' => '',
        // 	'description' =>'',
        // 	'contact' => '',
        // 	'city' => '',
        // 	'location_lat' => '',
        // 	'location_lng' => '',
        // 	'basic_info' => '',
        // 	'features' => ['',
        // 		'',
        // 		'',
        // 		'',
        // 	],
        // 	'booking_info' => '',
        // 	'fee_info' => '',
        // ]);

        
    }
}
