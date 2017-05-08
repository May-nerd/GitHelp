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

Route::get('/home', 'HomeController@index');
Route::get('/profile/{username}', 'ProfileController@profile');
<<<<<<< HEAD

Route::get('/profile/edit/{username}', 'ProfileController@edit');


=======
Route::get('/profile/{username}/settings', 'ProfileController@settings');
Route::resource('/profile', 'ProfileController');
>>>>>>> bd76130c67b49a754f685150cc13206ffb109d6b
