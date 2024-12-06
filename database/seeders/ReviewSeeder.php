<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([

            // Nguoi dung 1 danh gia khoa hoc 1
            [
                'student_id' => 1,
                'course_id' => 1,
                'review' => 'Khóa học này rất hay, phù hợp với người mới bắt đầu như tôi.',
                'star_rating' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 1 danh gia khoa hoc 2
            [
                'student_id' => 1,
                'course_id' => 2,
                'review' => 'Khóa học cần thêm nhiều ví dụ và bài tập cho mỗi phần.',
                'star_rating' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 1 danh gia khoa hoc 3
            [
                'student_id' => 1,
                'course_id' => 3,
                'review' => 'Tôi rất thích khóa học này.',
                'star_rating' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Nguoi dung 2 danh gia khoa hoc 1
            [
                'student_id' => 2,
                'course_id' => 1,
                'review' => 'Tôi không thể tải bài học.',
                'star_rating' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 2 danh gia khoa hoc 2
            [
                'student_id' => 2,
                'course_id' => 2,
                'review' => 'Khóa học này rất đáng học.',
                'star_rating' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 2 danh gia khoa hoc 3
            [
                'student_id' => 2,
                'course_id' => 3,
                'review' => 'Thứ tôi đang cần.',
                'star_rating' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Nguoi dung 3 danh gia khoa hoc 1
            [
                'student_id' => 3,
                'course_id' => 1,
                'review' => 'Khóa học rất dễ hiểu.',
                'star_rating' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 3 danh gia khoa hoc 2
            [
                'student_id' => 3,
                'course_id' => 2,
                'review' => 'Khóa học này rất hữu ích.',
                'star_rating' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Nguoi dung 3 danh gia khoa hoc 3
            [
                'student_id' => 3,
                'course_id' => 3,
                'review' => 'Tôi cần thêm nhiều bài học hơn.',
                'star_rating' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ]



        ]);
    }
}
