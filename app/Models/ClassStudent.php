<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassStudent extends Model
{
    protected $fillable = [
        'ClassStudent_name',
        'id',
        'class_id',
        'name',
        'nis',
    
    ];

    public function classstudent() :BelongsTo
    {
        return $this->belongsTo(ClassStudent::class, 'class_id');
    }
}
