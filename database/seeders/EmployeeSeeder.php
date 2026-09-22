<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'TJ',
            'email' => 'tj47@gmail.com',
            'phone' => '0147363655934',
            'designation' => 'Laravel Developer',
            'salary' => 60000,
        ]);

        
    }
}
