<?php

namespace App\Http\Controllers;
use App\Lesson;
use Illuminate\Support\Facades\Input;
use DB;
 
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_result(){
    	$search = Input::get ( 'search' );
    	// $lesson = Lesson::where ( 'title', 'LIKE', '%' . $search . '%' )->get ();
    	$lesson = DB::table('users')->select('users.id', 'users.name', 'lessons.title', 'lessons.created_at')->join('lessons', 'lessons.user_id', '=', 'users.id')->where ( 'lessons.title', 'LIKE', '%' . $search . '%' )->orWhere('users.name', 'LIKE', '%' . $search . '%')->get();

    	// echo $lesson;
    if (count ( $lesson ) > 0)
        return view ( 'content.search' )->withDetails ( $lesson )->withQuery ( $search );
    else
        return view ( 'content.search' )->withMessage ( 'No Details found. Try to search again !' );
    	
    }
}
