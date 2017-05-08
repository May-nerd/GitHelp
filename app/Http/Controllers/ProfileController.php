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
    public function settings($username){
    	$user = User::whereUsername($username)->first();
    	
    	return view('user.settings', compact('user'));
    }

    public function edit($username){
    	$user = User::whereUsername($username)->first();
    	return view('user.edit',compact('user'));
    }

    public function update(Request $request, $username){
    	$user = User::whereUsername($username)->first();
    	$password= $request->password;
    	$confpassword= $request->confpassword;

    	foreach($request as $key=>$value){
    		if($value=="")
    			$value = $user[$key];
    		if($key == "password" && $value != "")
    			$request->merge(array('password'=>bcrypt($request->password)));
    		if($password!=$confpassword)
    			return ('catch it!');
    	}
    	$user->update($request->all());
    	return redirect('/profile/'.$username);
    }
}
