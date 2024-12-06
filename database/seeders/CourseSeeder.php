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
                'code' => null,
                'teacher_id' => 1
            ],
            [
                'course_name' => 'Lập trình C#.',
                'description' => 'Khóa học lập trình C# kèm thực hành, khóa học sẽ giúp bạn làm quen với lập trình cũng như tạo nền tảng tư duy và kỹ năng cơ bản khi giải các bài tập.',
                'img' => 'images/courses/csharp-course.png',
                'description_details' => 'C# là một ngôn ngữ lập trình đơn giản, hiện đại, mục đích tổng quát, hướng đối tượng được phát triển bởi Microsoft bên trong phần khởi đầu .NET của họ, được phát triển chủ yếu bởi Anders Hejlsberg, một kiến trúc sư phần mềm nổi tiếng với các sản phẩm Turbo Pascal, Delphi, J++, WFC. Khóa học này sẽ cung cấp cho bạn kiến thức cơ bản về lập trình C# qua các khái niệm từ cơ bản và các bài tập thực tế bằng ngôn ngữ lập trình C#.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,

                'teacher_id' => 1

            ],
            [
                'course_name' => 'Java cho người mới bắt đầu.',
                'description' => 'Khóa học trang bị cho người mới bắt đầu kiến thức và kỹ năng lập trình Java cốt lõi, từ đó tự tin xây dựng các ứng dụng thực tế và phát triển sự nghiệp trong lĩnh vực công nghệ.',
                'img' => 'images/courses/java-course.png',
                'description_details' => 'Java là một trong những ngôn ngữ lập trình phổ biến và được ứng dụng rộng rãi nhất trên thế giới, từ các ứng dụng di động đến hệ thống doanh nghiệp lớn. Với tính đa nền tảng và cộng đồng hỗ trợ mạnh mẽ, Java là lựa chọn lý tưởng cho những ai muốn xây dựng sự nghiệp trong lĩnh vực phát triển phần mềm. Khóa học Java cơ bản này được thiết kế đặc biệt để giúp bạn làm quen với ngôn ngữ một cách dễ dàng và hiệu quả nhất.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,

                'teacher_id' => 2

            ],
            [
                'course_name' => 'Python cho người mới bắt đầu.',
                'description' => 'Khóa học cung cấp trọn bộ kiến thức cơ bản của lập trình Python, học viên có thể tạo ra một ứng dụng hoàn chỉnh với Python sau khi hoàn thành khóa học.',
                'img' => 'images/courses/python-course.png',
                'description_details' => 'Python được đánh giá là ngôn ngữ lập trình dễ học nhất hiện nay, cú pháp đơn giản và gần gũi với ngôn ngữ tự nhiên. Đặc biệt, mã lệnh của python ngắn gọn, dễ đọc và dễ ghi nhớ hơn. So với code Java, code Python ngắn hơn tới 3 - 5 lần, thậm chí là 5 - 10 lần so với code C++. Python trở thành ngôn ngữ lập trình số 1 hiện tại với sự ứng dụng rộng rãi trong cách lĩnh vực:Trí tuệ nhân tạo (Al) & Máy học (ML), Phân tích dữ liệu, Lập trình web, Phát triển game',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,

                'teacher_id' => 2

            ],
            [
                'course_name' => 'JavaScript cho người mới bắt đầu.',
                'description' => 'Khóa học JavaScript này được thiết kế để đưa bạn từ trình độ người mới bắt đầu đến trình độ trung cấp, bao gồm các khái niệm cốt lõi và kỹ năng thực hành cần thiết để xây dựng các ứng.',
                'img' => 'images/courses/javascript-course.png',
                'description_details' => 'JavaScript là một ngôn ngữ gia thêm khả năng tương tác cho website của bạn (ví dụ: trò chơi, các phản hồi khi các nút được nhấn hoặc nhập dữ liệu trên form, kiểu động, hoạt họa). Bài viết này sẽ giúp bạn khởi động với ngôn ngữ thú vị này và cho bạn ý tưởng về những gì có thể xảy ra. JavaScript (viết tắt là "js") là một ngôn ngữ lập trình mang đầy đủ tính năng của một ngôn ngữ lập trình động mà khi nó được áp dụng vào một tài liệu HTML, nó có thể đem lại khả năng tương tác động trên các trang web. Cha đẻ của ngôn ngữ này là Brendan Eich, đồng sáng lập dự án Mozilla, quỹ Mozilla, và tập đoàn Mozilla. JavaScript thật sự rất linh hoạt. Bạn có thể bắt đầu với các bước nhỏ, với ? viện ảnh, bố cục có tính thay đổi và phản hồi đến các nút nhấn. Khi có nhiều kinh nghiệm hơn, bạn có thể tạo ra các trò chơi, hoạt họa 2 chiều hoặc 3 chiều, ứng dụng cơ sở dữ liệu toàn diện và nhiều thứ khác!',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,

                'teacher_id' => 3

            ],
            [
                'course_name' => 'C cho người mới bắt đầu',
                'description' => 'Khóa học lập trình C cho người mới bắt đầu. Khóa học này sẽ cung cấp những kiến thức cơ bản và là nền tảng để bạn đi xa hơn trên con đường lập trình.',
                'img' => 'images/courses/c-course.png',
                'description_details' => '
                    Ngôn ngữ C là một ngôn ngữ đã có mặt từ rất lâu, là ngôn ngữ mệnh lệnh được ra đời từ đầu thập niên 70.
                    Ngôn ngữ C là một ngôn ngữ cấu trúc và xếp vào loại ngôn ngữ bậc 3 (loại ngôn ngữ cao cấp hơn ngôn ngữ mã máy và thấp hơn ngôn ngữ hướng đối tượng – bậc 4).
                    Ngôn ngữ C không chỉ được ưa chuộng trong việc viết các ứng dụng. Mà còn là ngôn ngữ rất hiệu quả trong việc viết các phần mềm hệ thống.
                    Được phát triển ban đầu bởi Dennis Ritchie để phát triển hệ thống lập trình UNIX ở Bell Labs.
                    Những hệ điều hành lớn Windows, Linux,…đều chịu ảnh hưởng từ ngôn ngữ C.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,
                'teacher_id' => 3

            ],
            [
                'course_name' => 'Điện toán đám mây',
                'description' => 'Khóa học sẽ cung cấp cái nhìn cơ bản và tổng quan về lĩnh vực điện toán đám mây và các công nghệ điện toán đám mây nổi bật.',
                'img' => 'images/courses/cloud-computer-course.png',
                'description_details' => 'Khóa học Cloud Essentials cung cấp kiến thức tổng quan về cloud computing. Bao gồm kiến trúc, các yêu cầu, kĩ thuật cơ bản. Hướng dẫn cách tạo ứng dụng và báo cáo cho các đối tượng. Bên cạnh đó, Khóa học sẽ giới thiệu về AWS, ứng dụng, bảo mật, Web API và các dịch vụ... cuối khóa học là các câu hỏi ôn tập để luyện tập và khắc sâu kiến thức.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '12345',
                'teacher_id' => 4

            ],
            [
                'course_name' => 'Truyền thông và Mạng máy tính',
                'description' => 'Khóa học cung cấp cho lập trình viên những kiến thức cơ bản và dễ hiểu về mạng máy tính và truyền thông dữ liệu.',
                'img' => 'images/courses/network-communication-course.png',
                'description_details' => 'Truyền thông và mạng máy tính là lĩnh vực nghiên cứu và ứng dụng liên quan đến việc trao đổi thông tin, dữ liệu giữa các thiết bị máy tính thông qua các phương tiện truyền thông. Đây là nền tảng cơ bản để kết nối các thiết bị trong môi trường mạng, từ quy mô nhỏ như mạng gia đình đến quy mô lớn như mạng Internet toàn cầu.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '12345',

                'teacher_id' => 4

            ],
            [
                'course_name' => 'Scratch cho người mới bắt đầu',
                'description' => 'Khóa học lập trình Scratch cho trẻ 6-15 tuổi giúp phát triển tư duy logic, sáng tạo và kỹ năng lập trình thông qua việc kéo thả các khối lệnh. Trẻ học làm trò chơi, câu chuyện và rèn kỹ năng theo tiêu chuẩn STEAM.',
                'img' => 'images/courses/scratch-course.png',
                'description_details' => '
                Scratch là ngôn ngữ lập trình được nghiên cứu và phát triển bởi nhóm nghiên cứu Lifelong Kindergarten, thuộc trung tâm Media Lab của Viện công nghệ Massachusetts (Massachusetts Institute of Technology – MIT, thành lập năm 1981 tại Thành phố Cambridge, Bang Massachusetts, Hoa Kỳ). 
                Scratch là một ngôn ngữ lập trình dạng kéo thả. Điều này có nghĩa là bạn không cần viết mã bằng văn bản, mà thay vào đó, bạn sẽ “kéo” và “thả” các khối lệnh để tạo ra các chương trình.
                Được thiết kế với giao diện đẹp mắt, gần gũi với trẻ em nên rất dễ dàng sử dụng, vừa trực quan, vừa đơn giản lại phù hợp cho mọi lứa tuổi. Cho ra sản phẩm liền tay mà vẫn đảm bảo tính khoa học, tính liên thông tri thức sau này.
                Với Scratch bạn có thể tạo ra game trí tuệ, hoạt ảnh, mô phỏng.. Và đặc biệt có thể dùng để tham gia các cuộc thi sáng tạo công nghệ hoặc cuộc thi Tin học trẻ cấp tiểu học. 
                ',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,
                'teacher_id' => 5

            ],
            [
                'course_name' => 'Ứng dụng AI trong công việc',
                'description' => 'Khóa học cung cấp cho người học các kỹ năng sử dụng AI để cá nhân hóa nội dung, tự động hóa các nhiệm vụ thường ngày nhằm nâng cao năng suất và cải thiện chất lượng công việc.',
                'img' => 'images/courses/AI-applications.jpg',
                'description_details' => '
                    Khóa học Ứng dụng AI trong công việc cung cấp cho người học những kiến thức và kỹ năng cơ bản về trí tuệ nhân tạo (AI), từ đó khai thác AI để nâng cao hiệu quả và tối ưu hóa quy trình làm việc. AI đang thay đổi cách chúng ta làm việc, giúp tự động hóa các nhiệm vụ thường ngày, hỗ trợ ra quyết định dựa trên dữ liệu và mang lại các công cụ mạnh mẽ để cải thiện năng suất và chất lượng công việc.
                    Khóa học sẽ giúp bạn hiểu được tiềm năng ứng dụng của AI trong nhiều lĩnh vực, từ quản lý công việc hàng ngày, phân tích dữ liệu, đến sáng tạo nội dung và ra quyết định chiến lược.',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,
                'teacher_id' => 5

            ],
            [
                'course_name' => 'Phần cứng máy tính',
                'description' => 'Khóa học Phần cứng Máy tính cung cấp kiến thức cơ bản về các thành phần phần cứng trong máy tính, từ bộ xử lý, bộ nhớ, lưu trữ đến bo mạch chủ.',
                'img' => 'images/courses/phancungmaytinh.png',
                'description_details' => 'Phần cứng máy tính chính là phần "thân xác" của máy tính, không có phần cứng máy tính thì không thể có máy tính. Phần cứng, kết hợp với phần mềm máy tính tạo ra một chiếc máy tính hoàn chỉnh có thể chạy được. Số lượng máy tính nhiều và chất lượng chính là một trong các tiêu chí đánh giá mức độ phát triển của các công ty, quốc gia...',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => null,
                'teacher_id' => 5
            ]
        ]);
    }
}