<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); //Cho biết đánh giá của học viên nào
            $table->unsignedBigInteger('course_id'); // Cho biết đánh giá thuộc khóa học nào
            // $table->unsignedBigInteger('teacher_id')->default(null); // Cho biết giáo viên nào đã trả lời đánh giá
            $table->string('review'); // Lời đánh giá của học viên
            $table->string('response')->nullable(); // Câu trả lời từ giáo viên
            $table->integer('star_rating'); // Xếp hạnh sao của giáo viên
            $table->boolean('anonymous')->default(false); // Lựa chọn đánh giá ẩn danh

            // Tạo ràng buộc
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            // $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
