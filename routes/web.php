<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', function(){
	return view('user/profile');
});


Auth::routes();

// ============STATIC VIEW ==============
Route::get('/create_lesson_plan', 'LessonController@create');
Route::get('/edit_lesson_plan/', 'LessonController@edit');
// ======================================

// do NOT include in Route::group
// LessonController already handles middleware
Route::resource('/lessons', 'LessonController');

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/home', 'HomeController@index');
	
	Route::resource('/profile', 'ProfileController');
	// Route::patch('/profile/{username}', 'ProfileController@update');
	// Route::resource('/edit', 'ProfileController');
});
