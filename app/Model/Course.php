<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    //protected $table = 'courses';

    protected $fillable = [
        'course_id',
        'course_name',
        'name_eng',
        'degree'
    ];
}
