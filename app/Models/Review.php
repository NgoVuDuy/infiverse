<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'teacher_id',
        'review',
        'response',
        'star_rating',
        'anonymous'
    ];

    public function Course() {

        return $this->belongsTo(Course::class, 'course_id');
    }

    public function User() {

        return $this->belongsTo(User::class, 'student_id');

    }

    // public function Teacher() {

    //     return $this->belongsTo(User::class, 'teacher_id');

    // }

      
}
