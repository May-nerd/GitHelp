<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    	'title',
    ];

    public function users(){
    	return $this->belongsToMany('App\User', 'reads', 'lesson_id', 'user_id');
    }
}
