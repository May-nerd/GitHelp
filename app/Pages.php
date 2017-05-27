<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
    protected $fillable = [
    	'page_number', 'lesson_id', 'title', 'content', 'has_image'
    ];
}
