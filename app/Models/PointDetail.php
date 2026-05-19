<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointDetail extends Model
{
     protected $fillable = [
        'point_detail_name',
        'id',
        'student_id',
        'teacher_id',
        'category_id',
        'initial_point',
        'remaining_point',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function point_category()
    {
        return $this->belongsTo(PointCategory::class, 'category_id');
    }
}
