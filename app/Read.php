<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    protected $fillable = [
    	'lesson_id', 'user_id', 'page_read',
    ];

    
}
