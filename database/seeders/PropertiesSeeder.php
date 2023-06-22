<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'name' => '3Bd Townhouse',
            'location' => 'Airport Residential',
            'type_id' => 5,
            'status_id' => 2,
            'bedrooms' => 3,
            'bathrooms' => 3,
            'take_tour_video' => '1Dsofmn8BSMBMqBhIqByF2BGyWURJUnI6',
            'price' => 3500,
            'description' => '<p>This stunning property boasts a range of luxurious features, including 
            all en-suite bedrooms, guest washrooms, an enclosed fitted kitchen, and a family area that 
            is perfect for relaxation and entertainment. The backyard garden provides a tranquil escape 
            from the hustle and bustle of everyday life, while the standby generator ensures that you will 
            never be left without power. Located in a secure, gated community with 48-hour security, 
            this property offers the ultimate in safety and peace of mind.</p>',
        ]);

        Property::create([
            'name' => 'Semi-furnished 4Bds Townhouse',
            'location' => 'East Airport',
            'type_id' => 5,
            'status_id' => 2,
            'bedrooms' => 4,
            'bathrooms' => 4,
            'take_tour_video' => '',
            'price' => 2000,
            'description' => '<p>Discover the epitome of contemporary living in this stunning, semi-furnished 4
             bedroom townhouse located in a secure gated community. Each of the bedrooms is en-suite, ensuring 
             privacy and comfort for every member of the household. The family area is the perfect space for 
             relaxation and bonding, while the fully fitted kitchen provides everything you need to whip up 
             delicious meals.</p><h4>Features</h4> <ul><li>All bedrooms are en-suite</li><li>Family area for relaxation and bonding</li>
             <li>Fully fitted kitchen</li><li>Standby generator for uninterrupted power supply</li>
             <li>48-hour security in a gated community</li></ul>',
        ]);

        Property::create([
            'name' => '4Bds with boy\'s quarters',
            'location' => 'East Airport',
            'type_id' => 5,
            'status_id' => 1,
            'bedrooms' => 4,
            'bathrooms' => 4,
            'take_tour_video' => '',
            'price' => 380000,
            'description' => '<p>Experience luxury living in this beautiful 4-bedroom house, with each bedroom 
            en-suite for maximum comfort and privacy. The property also comes with a convenient boy\'s quarters, 
            offering additional space and flexibility. The house boasts modern finishes and a fully fitted kitchen 
            with top-of-the-line appliances. The outdoor space is perfect for entertaining and relaxing.</p>
            <h4>Features</h4> <ul><li>Study Room</li><li>Fully fitted spacious kitchen</li>
             <li>Fitted Wardrobes</li><li>Garden</li>
             <li>48-hour security in a gated community</li></ul>
             <br/>
             <p><strong>NB:</strong> Agency terms apply</p>',
        ]);

        Property::create([
            'name' => '4Bds Apartment',
            'location' => 'Airport Residential',
            'type_id' => 5,
            'status_id' => 2,
            'bedrooms' => 4,
            'bathrooms' => 4,
            'take_tour_video' => '',
            'price' => 3000,
            'description' => '<p>Experience luxury living in this beautiful 4-bedroom house, with each bedroom 
            en-suite for maximum comfort and privacy. The property also comes with a convenient boy\'s quarters, 
            offering additional space and flexibility. The house boasts modern finishes and a fully fitted kitchen 
            with top-of-the-line appliances. The outdoor space is perfect for entertaining and relaxing.</p>
            <h4>Features</h4> <ul><li>All en-suite bedrooms</li><li>Spacious Rooms</li>
             <li>Fitted Wardrobes</li><li>Fully fitted kitchen</li>
             <li>Dinning area</li><li>Mini Community</li><li>Standby Generator set</li></ul>',
        ]);

        Property::create([
            'name' => 'Newly Built 2&3Bds',
            'location' => 'Ashale Botwe',
            'type_id' => 5,
            'status_id' => 1,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'take_tour_video' => '',
            'price' => 135000,
            'description' => '<p>Check out our newly built 2 and 3 bedroom houses in Ashale Botwe. Each bedroom comes 
            with its own en-suite bathroom, and there is also a guest washroom available. With prices starting at 
            $135,000 for a 2 bedroom and $155,000 for a 3 bedroom, these houses are a great investment for anyone looking 
            for a comfortable and modern living space. Don\'t miss out on this opportunity to own your dream home!</p>',
        ]);


        Property::create([
            'name' => '2Bd, $150 daily',
            'location' => 'East Legon Boundry road',
            'type_id' => 5,
            'status_id' => 2,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'take_tour_video' => '',
            'price' => 2200,
            'description' => '<p>Pricing for our fully-furnished 2 bedroom apartment starts at $150 per day, making 
            it an affordable and practical option for short-term stays. Monthly rates are also available for $2,200 
            per month. Contact us today to book your stay and experience the best that East Legon has to offer!</p>',
        ]);


        Property::create([
            'name' => '1Bd, $120 daily',
            'location' => 'East Legon',
            'type_id' => 5,
            'status_id' => 2,
            'bedrooms' => 1,
            'bathrooms' => 1,
            'take_tour_video' => '',
            'price' => 1500,
            'description' => '<p>Our Fully-furnished 1 bedroom apartment is an affordable and practical option for 
            short-term stays, with pricing starting at just $120 per day. Monthly rates are also available at $1,500 
            per month.</p>',
        ]);
    }
}
