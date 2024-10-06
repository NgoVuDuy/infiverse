<?php

namespace Database\Seeders;

use App\Models\Lession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lession::insert([

            [
                'course_id' => 1,
                'title' => 'Giới thiệu C++',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 1,
                'title' => 'Thiết lập môi trường phát triển',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 1,
                'title' => 'Cấu trúc chung chương trình C++',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 2,
                'title' => 'Giới thiệu C#',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 2,
                'title' => 'Các lệnh cơ bản',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 2,
                'title' => 'Cấu trúc chung chương trình C++',
                'file' => 'files/lab1.pdf'
            ],            
            [
                'course_id' => 3,
                'title' => 'Giới thiệu Java',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 3,
                'title' => 'Các lệnh cơ bản',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 3,
                'title' => 'Cấu trúc chung chương trình Java',
                'file' => 'files/lab1.pdf'
            ], 
            [
                'course_id' => 4,
                'title' => 'Giới thiệu Python',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 4,
                'title' => 'Các lệnh cơ bản',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 4,
                'title' => 'Cấu trúc chung chương trình Python',
                'file' => 'files/lab1.pdf'
            ], 
            [
                'course_id' => 5,
                'title' => 'Giới thiệu Javascript',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 5,
                'title' => 'Các lệnh cơ bản',
                'file' => 'files/lab1.pdf'
            ],
            [
                'course_id' => 5,
                'title' => 'Cấu trúc chung chương trình Javascript',
                'file' => 'files/lab1.pdf'
            ], 


        ]);
    }
}
