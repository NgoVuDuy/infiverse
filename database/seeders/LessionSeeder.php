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

            // Khóa 1
            [
                'course_id' => 1,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 1,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 1,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 1,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 1,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 2
            [
                'course_id' => 2,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 2,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 2,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 2,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 2,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 3
            [
                'course_id' => 3,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 3,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 3,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 3,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 3,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 4
            [
                'course_id' => 4,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 4,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 4,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 4,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 4,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 5
            [
                'course_id' => 5,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 5,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 5,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 5,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 5,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 7
            [
                'course_id' => 7,
                'title' => 'Overview về Cloud Essentials',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 7,
                'title' => 'Mô hình điện toán đám mây',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 7,
                'title' => 'Lịch sử hình thành của điện toán đám mây',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 7,
                'title' => 'Một số nhà cung cấp dịch vụ',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 7,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 8
            [
                'course_id' => 8,
                'title' => 'Truyền thông dữ liệu và mạng máy tính',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 8,
                'title' => 'Các khái niệm',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 8,
                'title' => 'Các phương thức truyền thông',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 8,
                'title' => 'Mạng máy tính',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 8,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 11
            [
                'course_id' => 11,
                'title' => 'Giới thiệu về máy tính',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 11,
                'title' => 'Ưu điểm và nhược điểm của máy tính',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 11,
                'title' => 'Phần cứng máy tính',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 11,
                'title' => 'Cấu tạo hộp máy tính để bàn',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 11,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 9
            [
                'course_id' => 9,
                'title' => 'Giới Thiệu Về Scratch Và Cài Đặt Phần Mềm Lập Trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 9,
                'title' => 'Tổng Quan Về Giao Diện Scratch',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 9,
                'title' => 'Các Khu Vực Làm Việc Trong Phần Mềm Scratch',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 9,
                'title' => 'Các Thao Tác Cơ Bản Trong Phần Mềm Scratch',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 9,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 10
            [
                'course_id' => 10,
                'title' => 'Giới thiệu AI và ứng dụng',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 10,
                'title' => 'Tổng quan về AI',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 10,
                'title' => 'Các công cụ AI phổ biến',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 10,
                'title' => 'Ví dụ thực tế sử dụng AI',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 10,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            // Khóa 6
            [
                'course_id' => 6,
                'title' => 'Giới thiệu chung',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 6,
                'title' => 'Cài đặt môi trường lập trình',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 6,
                'title' => 'Chương trình đầu tiên Hello World',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 6,
                'title' => 'Các cú pháp',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],
            [
                'course_id' => 6,
                'title' => 'Tổng kết',
                'file' => 'files/lab1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'desc_file' => 'Xem chi tiết trong file đính kèm phía trên'
            ],




        ]);
    }
}
