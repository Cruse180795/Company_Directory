<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = Location::first();

        if (! $location) {
            return;
        }

        Department::create([
            'name' => 'Human Resources',
            'code' => 'HR',
            'location_id' => $location->id,
            'is_active' => true,
        ]);
    }
}
