<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = 'chapters';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'name', 'course_id'
    ];

    public function lessons(){
        return $this->hasMany('App\Lesson')->orderBy('id', 'ASC');
    }

}
