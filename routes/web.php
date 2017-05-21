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


Auth::routes();

// ============STATIC VIEW ==============
Route::get('/Create Lesson Plan', 'LessonController@show');
// ======================================


Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/home', 'HomeController@index');
	Route::get('/profile/{username}', 'ProfileController@profile');


	Route::get('/profile/edit/{username}', 'ProfileController@edit');
	Route::resource('/profile', 'ProfileController');
});
