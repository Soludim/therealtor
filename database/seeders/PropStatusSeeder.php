<?php

namespace Database\Seeders;

use App\Models\PropStatus;
use Illuminate\Database\Seeder;

class PropStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropStatus::create([
           'name'=> 'Sale'
        ]);
        PropStatus::create([
            'name'=> 'Rent'
        ]);
    }
}
