<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Read;
use Auth;

class ProfileController extends Controller
{

    public function profile($username){
    	$user = User::whereUsername($username)->first();
    	$lessons = $user->reads;

    	return view('user.profile', compact(['user', 'lessons']));
    }
    

    // public function edit($username){

    //     if(Auth::check() && Auth::user()->username == $username){
    //         $user = User::whereUsername($username)->first();


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
    	}
    	$user->update($request->all());
    	return redirect('/profile/'.$username);
    }

    protected function validator(array $data)
    {
        
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|max:32|unique:users',
            'email' => 'required|email|max:255|unique:owners',
            'password' => 'required|string|min:6|confirmed',
        ], $messages);

        return $validator;
    }
}
