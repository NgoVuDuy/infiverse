<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'file',
        'desc_file',
        'created_at',
        'updated_at'
    ];

    // Thiết lập quan hệ ngược lại: Một bài học thuộc về một khóa 
    
    public function Course()
    {

        return $this->belongsTo(Course::class, 'course_id');
    }
}
