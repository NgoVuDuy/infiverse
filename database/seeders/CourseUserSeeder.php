<?php

namespace Database\Seeders;

use App\Models\UserCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserCourse::insert([

            // Nguoi dung 1 tham gia khoa hoc 1
            [
                'course_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 1 tham gia khoa hoc 2

            [
                'course_id' => 2,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 1 tham gia khoa hoc 3

            [
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],

            // Nguoi dung 2 tham gia khoa hoc 1
            [
                'course_id' => 1,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 2 tham gia khoa hoc 2

            [
                'course_id' => 2,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 2 tham gia khoa hoc 3

            [
                'course_id' => 3,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            

            // Nguoi dung 3 tham gia khoa hoc 1
            [
                'course_id' => 1,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 3 tham gia khoa hoc 2

            [
                'course_id' => 2,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            // Nguoi dung 3 tham gia khoa hoc 3

            [
                'course_id' => 3,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
