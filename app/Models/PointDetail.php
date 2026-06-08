<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\PointCategory;

class PointDetail extends Model
{
     protected $fillable = [
        'point_detail_name',
        'id',
        'student_id',
        'teacher_id',
        'category_id',
        'occurrent_number',
        'counted_point',
        'amount',
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
    protected static function booted()
    {
        static::created(function ($pointDetail) {
            $student = $pointDetail->student;

            if ($student) {
                $totalTransaksiPoin = PointDetail::where('student_id', $student->id)->sum('counted_point');
                $student->update([
                    'current_point' => 150 + $totalTransaksiPoin
                ]);
            }
        });

        static::deleted(function ($pointDetail) {
            $student = $pointDetail->student;

            if ($student) {
                $totalTransaksiPoin = PointDetail::where('student_id', $student->id)->sum('counted_point');
                
                $student->update([
                    'current_point' => 150 + $totalTransaksiPoin
                ]);
            }
        });
    }
}
