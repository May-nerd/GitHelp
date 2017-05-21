<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Read;
use Auth;

class LessonController extends Controller{

    public function show(){
    	// $user = User::whereUsername($username)->first();
    	// $lessons = $user->reads;

    	return view('lessons.create_lesson');

    }
    
}
