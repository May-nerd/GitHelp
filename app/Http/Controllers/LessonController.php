<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lesson;
use App\Page;
use Illuminate\Support\Facades\Input;
class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create_lesson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: validation

        $lesson = new Lesson;

        $lesson->user_id = Auth::id();
        $lesson->title = $request->lesson_title;
        $lesson->save();

        $titles = $request->input('page_title.*');
        $files = $request->file('image.*');
        $contents = $request->input('page_content.*');
        for ($i = 1; $i < count($titles); $i++) {
            $page = new Page;
            $page->page_number = $i + 1;
            $page->lesson_id = $lesson->id;
            $page->title = $titles[$i];
            $page->content = $contents[$i];

            // create unique filename. save in public/uploads
            if (!is_null($files[$i])) {
                // check if file exists already, just in case
                $filename = uniqid(null, true) . '-' . $files[$i]->getClientOriginalName();
                while (file_exists(public_path('uploads') . '/' . $filename)) {
                    $filename = uniqid(null, true) . '-' . $files[$i]->getClientOriginalName();
                }

                $files[$i]->move(public_path('uploads'), $filename);
                $page->image = $filename;
            }

            $page->save();
        }

        // TODO: redirect to show once that's implemented
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lessons = Lesson::find($id);
        $pages = Page::where('lesson_id','=',$id)->get();

        return view('lessons.view_lesson', compact('lessons', 'pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        $pages = Page::where('lesson_id','=',$id)->get();


        return view('lessons.edit_lesson',compact('lesson','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->title = $request->lesson_title;
        $lesson->save();

        $titles = $request->input('pageTitle.*');
        $contents = $request->input('pageContent.*');
        $files = $request->file('upload.*');

        for($i = 0; $i < count($titles); $i++){
            if(!isset($upload[$i])){
                $upload[$i] = null;
            }
        }
        foreach ($upload as $value) {
            # code...
            echo $value;
            echo " | ";
        }

        $page = Page::where('lesson_id','=',$id)->get();
        for ($i = 0; $i < count($titles); $i++) {
            $page[$i]->title = $titles[$i];
            $page[$i]->content = $contents[$i];
            if ($files[$i] != null) {
                $filename = uniqid(null, true) . '-' . $files[$i]->getClientOriginalName();
                $files[$i]->move(public_path('uploads'), $filename);
                $page[$i]->image = $filename;
            }
            $page[$i]->save();
        }
        return redirect("lessons/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPage($lesson_id, $page_number)
    {
        return Page::where('lesson_id','=',$lesson_id)->where('page_number','=',$page_number)->get();
    }

}
