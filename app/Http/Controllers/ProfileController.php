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
       public function subscribe($username){
 
         // get username of the profile ur on
        $user = User::where('username', $username)->firstOrFail();
        
       
        // get id of user and attach to me
        $id = Auth::id();
        $me = User::find($id);
        $me->subscribing()->attach($user->id);
        
        return redirect('/profile/' . $username);
    }

    public function unsubscribe($username){
    
        // get username of the profile ur on
        $user = User::where('username', $username)->firstOrFail();
        
        // delete user from me
        $me = Auth::user();
        $me->subscribing()->detach($user->id);
        
        return redirect('/profile/' . $username);
        $lessons = $user->reads;
    	return view('user.profile', compact(['user', 'lessons']));
    }
    
}
