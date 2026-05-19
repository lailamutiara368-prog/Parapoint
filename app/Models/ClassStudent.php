<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassStudent extends Model
{
    protected $fillable = [
        'class_student_name',

    
    ];

   public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'class_student_id');
    }
}
