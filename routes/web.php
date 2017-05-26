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
Route::get('search', function(){
	return view('content/search');
});


// ======================================

// do NOT include in Route::group
// LessonController already handles middleware
Route::resource('/lessons', 'LessonController');

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/home', 'HomeController@index');
	Route::get('/profile/{username}', 'ProfileController@profile');

    Route::get('/profile/{username}/subscribes', 'ProfileController@subscribe');
    Route::get('/profile/{username}/unsubscribes', 'ProfileController@unsubscribe');
	Route::get('/profile/edit/{username}', 'ProfileController@edit');
	Route::resource('/profile', 'ProfileController');
});

