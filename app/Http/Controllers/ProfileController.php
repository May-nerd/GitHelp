<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($id){
    	$user = User::whereUsername($id)->first();
    	return view('user.profile', compact('user'));
    }

    public function edit($id){
    	$user = User::findOrFail($id);
    	return view('user.edit',compact('user'));
    }

    public function update(Request $request, $id){
    	$user = User::findOrFail($id);

    	foreach($request as $key=>$value){
    		if($value=="")
    			$value = $user[$key];
    		if($key == "password" && $value != "")
    			$request->merge(array('password'=>bcrypt($request->password)));
    	}
    	$user->update($request->all());
    	return view('user.profile', compact('user'));
    }
}
