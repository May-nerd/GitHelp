<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    	'title',
    ];

    public function readBy(){
    	return $this->belongsToMany('App\User', 'reads', 'lesson_id', 'user_id');
    }

    public function createdBy(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function pages(){
    	return $this->hasMany('App\Page');
    }
}
