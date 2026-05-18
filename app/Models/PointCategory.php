<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointCategory extends Model
{
     protected $fillable = [
        'point_category_name',
        'category_type',
        'amount',
        'description',
    
    ];
}
