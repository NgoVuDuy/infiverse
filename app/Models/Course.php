<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'course_name',
        'description',
        'img',
        'description_details',
        'created_at',
        'updated_at',
        'code',
        'topic'
    ];

    // Thiết lập quan hệ 1-nhiều: Một khóa học có nhiều bài học

    public function Lessions() {

        return $this->hasMany(Lession::class, 'course_id');
    }

    public function Users() {

        return $this->belongsToMany(User::class, 'course_user')->withPivot('created_at');
    }

    public function Reviews() {

        return $this->hasMany(Review::class, 'course_id');
    }
}
