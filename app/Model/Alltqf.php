<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alltqf extends Model
{
    //
    protected $table = 'tqfs';

    protected $fillable = [
        'id',
        'course_id',
        'teacher_name',
        'major_id',
        'level',
        'term',
        'nyear',
        'link_tqf3',
        'link_tqf4',
        'link_tqf5',
        'status',
        'mana_id'

    ];

    public function Alltqf_relate()
    {
        return $this->belongsTo('App\Model\ViewCourse','course_id');
    }
}
