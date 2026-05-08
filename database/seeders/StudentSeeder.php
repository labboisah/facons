<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'student',
                'email' => 'student@facons.ng',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }

    }
}
