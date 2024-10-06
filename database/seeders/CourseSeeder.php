<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Course::delete();
        //
        Course::insert([
            [
                'course_name' => 'Lập trình C++ cơ bản.',
                'description' => 'Khóa học miễn phí ngôn ngữ C++ dành cho người mới bắt đầu học lập trình.',
                'img' => 'images/courses/cpp-course.png'

            ],
            [
                'course_name' => 'Lập trình C#.',
                'description' => 'Khóa học lập trình C# kèm thực hành, khóa học sẽ giúp bạn làm quen với lập trình cũng như tạo nền tảng tư duy và kỹ năng cơ bản khi giải các bài tập.',
                'img' => 'images/courses/csharp-course.png'

            ],
            [
                'course_name' => 'Java cho người mới bắt đầu.',
                'description' => 'Khóa học trang bị cho người mới bắt đầu kiến thức và kỹ năng lập trình Java cốt lõi, từ đó tự tin xây dựng các ứng dụng thực tế và phát triển sự nghiệp trong lĩnh vực công nghệ.',
                'img' => 'images/courses/java-course.png'

            ],
            [
                'course_name' => 'Python cho người mới bắt đầu.',
                'description' => 'Khóa học cung cấp trọn bộ kiến thức cơ bản của lập trình Python, học viên có thể tạo ra một ứng dụng hoàn chỉnh với Python sau khi hoàn thành khóa học.',
                'img' => 'images/courses/python-course.png'

            ],
            [
                'course_name' => 'JavaScript cho người mới bắt đầu.',
                'description' => 'Khóa học JavaScript này được thiết kế để đưa bạn từ trình độ người mới bắt đầu đến trình độ trung cấp, bao gồm các khái niệm cốt lõi và kỹ năng thực hành cần thiết để xây dựng các ứng.',
                'img' => 'images/courses/javascript-course.png'

            ]
        ]);
    }
}
