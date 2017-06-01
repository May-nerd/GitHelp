<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;

class TagController extends Controller
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
    public function index($maincategory, $tagname)
    {
        // $maincategory_id = DB::table('maincategories')
        // ->select('id')
        // ->where('name', '=', $maincategory)
        // ->get();

        $maincategory_id = App\Maincategory::where('name', $maincategory)
        ->get()->first()->id;

        $lessons = DB::table('lessons')
        ->select('*')
        ->join('lessontags', 'lessons.id', '=', 'lessontags.lesson_id')
        ->join('tags', 'lessontags.tag_id', '=', 'tags.id')
        ->join('maincategories', 'maincategories.id', '=', 'maincategory_id')
        // ->select('tags.  name')
        ->where('lessons.maincategory_id', '=', $maincategory_id)
        ->where('tags.name', '=', $tagname)
        ->groupBy('tags.id')
        ->get();

        return view('tagresults', compact('maincategory', 'tagname', 'lessons'));

    }
}

