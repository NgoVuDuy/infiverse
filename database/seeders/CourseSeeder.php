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
                'img' => 'images/courses/cpp-course.png',
                'description_details' => 'C++ là một trong những ngôn ngữ lập trình phổ biến nhất, đặc biệt trong lập trình thi đấu. Hiện nay, đa số các bạn trẻ đều ưu tiên chọn học C++ để xây dựng nền tảng và tư duy lập trình khi mới bắt đầu khám phá lập trình. Khóa học C++ cơ bản được thiết kế với những kiến thức cơ bản và dễ hiểu nhất để giúp các bạn tiếp cận dễ dàng.',
                'created_at' => now(),
                'updated_at' => now(),
                'teacher_id' => 1
            ],
            [
                'course_name' => 'Lập trình C#.',
                'description' => 'Khóa học lập trình C# kèm thực hành, khóa học sẽ giúp bạn làm quen với lập trình cũng như tạo nền tảng tư duy và kỹ năng cơ bản khi giải các bài tập.',
                'img' => 'images/courses/csharp-course.png',
                'description_details' => 'C# là một ngôn ngữ lập trình đơn giản, hiện đại, mục đích tổng quát, hướng đối tượng được phát triển bởi Microsoft bên trong phần khởi đầu .NET của họ, được phát triển chủ yếu bởi Anders Hejlsberg, một kiến trúc sư phần mềm nổi tiếng với các sản phẩm Turbo Pascal, Delphi, J++, WFC. Khóa học này sẽ cung cấp cho bạn kiến thức cơ bản về lập trình C# qua các khái niệm từ cơ bản và các bài tập thực tế bằng ngôn ngữ lập trình C#.',
                'created_at' => now(),
                'updated_at' => now(),
                'teacher_id' => 1

            ],
            [
                'course_name' => 'Java cho người mới bắt đầu.',
                'description' => 'Khóa học trang bị cho người mới bắt đầu kiến thức và kỹ năng lập trình Java cốt lõi, từ đó tự tin xây dựng các ứng dụng thực tế và phát triển sự nghiệp trong lĩnh vực công nghệ.',
                'img' => 'images/courses/java-course.png',
                'description_details' => 'Java là một trong những ngôn ngữ lập trình phổ biến và được ứng dụng rộng rãi nhất trên thế giới, từ các ứng dụng di động đến hệ thống doanh nghiệp lớn. Với tính đa nền tảng và cộng đồng hỗ trợ mạnh mẽ, Java là lựa chọn lý tưởng cho những ai muốn xây dựng sự nghiệp trong lĩnh vực phát triển phần mềm. Khóa học Java cơ bản này được thiết kế đặc biệt để giúp bạn làm quen với ngôn ngữ một cách dễ dàng và hiệu quả nhất.',
                'created_at' => now(),
                'updated_at' => now(),
                'teacher_id' => 2

            ],
            [
                'course_name' => 'Python cho người mới bắt đầu.',
                'description' => 'Khóa học cung cấp trọn bộ kiến thức cơ bản của lập trình Python, học viên có thể tạo ra một ứng dụng hoàn chỉnh với Python sau khi hoàn thành khóa học.',
                'img' => 'images/courses/python-course.png',
                'description_details' => 'Python được đánh giá là ngôn ngữ lập trình dễ học nhất hiện nay, cú pháp đơn giản và gần gũi với ngôn ngữ tự nhiên. Đặc biệt, mã lệnh của python ngắn gọn, dễ đọc và dễ ghi nhớ hơn. So với code Java, code Python ngắn hơn tới 3 - 5 lần, thậm chí là 5 - 10 lần so với code C++. Python trở thành ngôn ngữ lập trình số 1 hiện tại với sự ứng dụng rộng rãi trong cách lĩnh vực:Trí tuệ nhân tạo (Al) & Máy học (ML), Phân tích dữ liệu, Lập trình web, Phát triển game',
                'created_at' => now(),
                'updated_at' => now(),
                'teacher_id' => 2

            ],
            [
                'course_name' => 'JavaScript cho người mới bắt đầu.',
                'description' => 'Khóa học JavaScript này được thiết kế để đưa bạn từ trình độ người mới bắt đầu đến trình độ trung cấp, bao gồm các khái niệm cốt lõi và kỹ năng thực hành cần thiết để xây dựng các ứng.',
                'img' => 'images/courses/javascript-course.png', 
                'description_details' => 'JavaScript là một ngôn ngữ gia thêm khả năng tương tác cho website của bạn (ví dụ: trò chơi, các phản hồi khi các nút được nhấn hoặc nhập dữ liệu trên form, kiểu động, hoạt họa). Bài viết này sẽ giúp bạn khởi động với ngôn ngữ thú vị này và cho bạn ý tưởng về những gì có thể xảy ra. JavaScript (viết tắt là "js") là một ngôn ngữ lập trình mang đầy đủ tính năng của một ngôn ngữ lập trình động mà khi nó được áp dụng vào một tài liệu HTML, nó có thể đem lại khả năng tương tác động trên các trang web. Cha đẻ của ngôn ngữ này là Brendan Eich, đồng sáng lập dự án Mozilla, quỹ Mozilla, và tập đoàn Mozilla. JavaScript thật sự rất linh hoạt. Bạn có thể bắt đầu với các bước nhỏ, với ? viện ảnh, bố cục có tính thay đổi và phản hồi đến các nút nhấn. Khi có nhiều kinh nghiệm hơn, bạn có thể tạo ra các trò chơi, hoạt họa 2 chiều hoặc 3 chiều, ứng dụng cơ sở dữ liệu toàn diện và nhiều thứ khác!',
                'created_at' => now(),
                'updated_at' => now(),
                'teacher_id' => 2

            ]
        ]);
    }
}
