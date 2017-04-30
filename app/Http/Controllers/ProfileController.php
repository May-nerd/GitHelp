<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public funtion profile($username){
    	$user = User::whereUsername($username)->first();
    	return view('user.profile', compact('user'));
    }
}
