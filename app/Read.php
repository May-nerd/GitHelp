<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    protected $fillable = [
    	'lesson_id', 'user_id', 'page_read',
    ];

    public function lessons(){
    	return $this->belongsTo('App\Lesson', 'lesson_id');
    }

    public function users(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    
}
