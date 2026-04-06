<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::firstOrCreate(
            ['email' => 'admin@facons.test'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Create lecturer
        Lecturer::firstOrCreate(
            ['email' => 'lecturer@facons.test'],
            [
                'name' => 'Lecturer User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Create student
        Student::firstOrCreate(
            ['email' => 'student@facons.test'],
            [
                'name' => 'Student User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
