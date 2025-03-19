<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'Hassaan',
            'email' => 'hk@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '1234567890',
            'address' => '123 Main St, City',
            'qualification' => 'M.Ed in Mathematics',
            'subject_specialty' => 'Mathematics',
            'status' => 'active',
        ]);

        Teacher::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987654321',
            'address' => '456 Oak Ave, Town',
            'qualification' => 'Ph.D in Physics',
            'subject_specialty' => 'Physics',
            'status' => 'active',
        ]);

        Teacher::create([
            'name' => 'Mike Johnson',
            'email' => 'mike.johnson@example.com',
            'password' => Hash::make('password'),
            'phone' => '5555555555',
            'address' => '789 Pine Rd, Village',
            'qualification' => 'B.Ed in English',
            'subject_specialty' => 'English',
            'status' => 'active',
        ]);
    }
}
