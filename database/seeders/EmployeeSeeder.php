<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $department = Department::first();

        if (! $department) {
            return;
        }

        Employee::create([
            'department_id' => $department->id,
            'employee_number' => 'EMP002',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test1@test.com',
            'phone_number' => '555-1234',
            'job_title' => 'Software Engineer',
            'hire_date' => Carbon::create('2020', '01', '15'),
            'date_of_birth' => Carbon::create('1995', '07', '18'),
            'is_active' => true,
        ]);
    }
}
