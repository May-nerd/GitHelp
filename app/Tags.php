<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'name',
    ];

    public function taggedBy(){
    	return $this->belongsToMany('App\Lessons', 'lessontags', 'lesson_id', 'tag_id');
    }

    public function composedBy(){
    	return $this->belongsTo('App\Lessons', 'lesson_id');
    }
}
