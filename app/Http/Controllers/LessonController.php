<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Lesson;
use App\Page;

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
        //
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

        for ($i = 0; $i < count($titles); $i++) {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('lessons.edit_lesson');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return redirect('/home');
    }
}
