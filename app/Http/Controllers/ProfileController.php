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
    	$password = bcrypt($request->password);
    	foreach($request as $key=>$value){
    		if($value == ""){
                $value = $user[$key];
            }
    		// if($key == "password" && $value != ""){
      //           $request->user()->fill(['password'=>$password])->save();
      //           //$request->user()->fill(['password'=>$pass]);
      //       }
    	}
    	$user->update($request->all());
        $request->user()->fill(['password'=>$password])->save();
        $lessons = $user->reads;
    	return view('user.profile', compact(['user', 'lessons']));
    }
}
