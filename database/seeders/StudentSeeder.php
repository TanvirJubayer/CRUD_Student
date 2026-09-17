<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Tanvir Jobayer',
            'email' => 'tanvir@gmail.com',
            'phone' => '01743635878',
            'department' => 'BBA',
            'age' => 32,
        ]);

        Student::create([
            'name' => 'Rahim Ahmed',
            'email' => 'rahim@gmail.com',
            'phone' => '01711111111',
            'department' => 'Computer Science',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Karim Hasan',
            'email' => 'karim@gmail.com',
            'phone' => '01822222222',
            'department' => 'Electrical Engineering',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Nusrat Jahan',
            'email' => 'nusrat@gmail.com',
            'phone' => '01933333333',
            'department' => 'Business Administration',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Sadia Islam',
            'email' => 'sadia@gmail.com',
            'phone' => '01644444444',
            'department' => 'English',
            'age' => 22,
        ]);
    }
}
