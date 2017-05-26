<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mainlessons extends Model
{
    //
    protected $fillable = [
    	'categoryName',
    ];

    public function categorizedBy(){
    	return $this->belongsToMany('App\Lessons', 'lessoncategory', 'lesson_id', 'mainlesson_id');
    }

    public function composedBy(){
    	return $this->belongsTo('App\Lessons', 'lesson_id');
    }

}
