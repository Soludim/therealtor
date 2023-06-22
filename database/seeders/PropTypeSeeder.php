<?php

namespace Database\Seeders;

use App\Models\PropType;
use Illuminate\Database\Seeder;

class PropTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropType::create([
            'name' => 'Commercial'
        ]);
        PropType::create([
            'name' => 'Residential'
        ]);
        PropType::create([
            'name' => 'Villa'
        ]);
        PropType::create([
            'name' => 'Condominium'
        ]);
        PropType::create([
            'name' => 'Apartment'
        ]);
    }
}
