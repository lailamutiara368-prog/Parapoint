<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
     protected $fillable = [
        'class_student_id',
        'nis',
        'name',
        'current_point',

    ];

    public function class_student() : BelongsTo 
{
    return $this->belongsTo(ClassStudent::class, 'class_student_id');
}
}
