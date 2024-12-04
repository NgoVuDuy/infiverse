<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'course-img' => 'required',
            'coursename' => 'required',
            'description' => 'required',
            'description_details' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'course-img.required' => 'Vui lòng thêm hình ảnh cho khóa học.',
            'coursename.required' => 'Vui lòng nhập tên khóa học.',
            'description.required' => 'Vui lòng nhập mô tả sơ lược cho khóa học.',
            'description_details.required' => 'Vui lòng nhập mô tả chi tiết cho khóa học.',

        ];
    }
}
