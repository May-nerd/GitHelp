<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessoncategory extends Model
{
    //
    protected $fillable = [
    	'title',
    ];

    public function readBy(){
    	return $this->belongsToMany('App\Lessons', 'reads', 'lesson_id', 'id');
    }

    public function createdBy(){
    	return $this->belongsTo('App\Lessons', 'lesson_id');
    }

    public function pages(){
    	return $this->hasMany('App\Page');
    }
}
