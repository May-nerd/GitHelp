<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tagnames = DB::table('lessons')
        ->select('*', DB::raw('tags.name as tagname'), DB::raw('COUNT(*) as count'))
        // ->select('*', , DB::raw('COUNT(lessontags.id) as number'))
        ->join('lessontags', 'lessons.id', '=', 'lessontags.lesson_id')
        ->join('tags', 'lessontags.tag_id', '=', 'tags.id')

        ->join('maincategories', 'maincategories.id', '=', 'maincategory_id')
        // ->select('tags.  name')
        ->where('lessons.maincategory_id', '=', $id)
        ->groupBy('tags.id')
        ->orderBy('count', 'DESC')
        ->get();

        return ($tagnames);
    }
    public function show(){
        return view('home');
    }
}

