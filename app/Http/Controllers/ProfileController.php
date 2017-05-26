<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Read;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{


    public function show($username){
    	$user = User::whereUsername($username)->first();
    	$lessons = $user->reads;

    	return view('user.profile', compact(['user', 'lessons']));
    }
    
    public function edit(){
    	$user = User::whereUsername(Auth::user()->username)->first();
    	return view('user.edit',compact('user'));
    }


    public function index($username){
        $user = User::whereUsername($username)->first();
        $lessons = $user->reads;

        return view('user.profile', compact(['user', 'lessons']));
    }

    public function update(Request $request, $profile){

    	$user = User::whereUsername($profile)->first();
    	$password = $request->password;
        if (empty($password)){
            $password = $user->password;
        }else{
            $password = bcrypt($password);
        }
        
    	foreach($request as $key=>$value){
    		if($value == ""){
                $value = $user[$key];
            }
    	}
        $request->merge(array('password'=>$password));
        $user->update($request->all());
        $lessons = $user->reads;
    	return view('user.profile', compact(['user', 'lessons']));
    }
}
