<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    //
    protected $table = 'my_courses';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'user_id', 'course_id'
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
