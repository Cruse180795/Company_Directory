<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Location::create([
            'city' => 'Newcastle upon Tyne',
            'country' => 'United Kingdom',
            'timezone' => 'GMT',
            'is_active' => true,
        ]);
    }
}
