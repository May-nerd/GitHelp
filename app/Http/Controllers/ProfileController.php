<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Read;

class ProfileController extends Controller
{
    public function profile($username){
    	$user = User::whereUsername($username)->first();
    	$lessons = $user->reads;

    	return view('user.profile', compact(['user', 'lessons']));
    }
}
