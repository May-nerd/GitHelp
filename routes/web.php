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

// ============ STATIC VIEW ==============
Route::get('/create_lesson_plan', 'LessonController@create');
Route::get('/edit_lesson_plan/', 'LessonController@edit');

Route::get('subjects', function(){ return view('content/subject'); });
Route::get('categories', function(){ return view('content/category'); });
Route::get('search', function(){ return view('content/search'); });

Route::any( '/search', 'SearchController@search_result');

// ======================================

// do NOT include in Route::group
// LessonController already handles middleware
Route::resource('/lessons', 'LessonController');

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/home', 'HomeController@index');
	Route::resource('/profile', 'ProfileController');
	
// 	Route::resource('/profile', 'ProfileController');
// 	// Route::patch('/profile/{username}', 'ProfileController@update');
// 	// Route::resource('/edit', 'ProfileController');

	Route::get('/profile/{username}', 'ProfileController@profile');
    	Route::get('/profile/{username}/subscribes', 'ProfileController@subscribe');
    	Route::get('/profile/{username}/unsubscribes', 'ProfileController@unsubscribe');
	Route::get('/profile/edit/{username}', 'ProfileController@edit');
	Route::resource('/profile', 'ProfileController');
    
    	Route::resource('/notification', 'NotifsController');
	Route::get('/profile/edit/{username}', 'ProfileController@edit');
	Route::resource('/profile', 'ProfileController');
	Route::get('/getlessons/{lesson_id}/{page_number}', 'LessonController@getPage');
});
