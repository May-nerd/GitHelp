<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reads(){
        return $this->belongsToMany('App\Lesson', 'reads', 'user_id', 'lesson_id');
    }

    public function creates(){
        return $this->hasMany('App\Lesson');
    }
    
    public function subscribing(){
        return $this->belongsToMany('App\User','subscribes', 'subscriber_id', 'user_id')->withTimestamps();
    }
    
    public function is_Subscribed(User $user){
        
        return !is_null($this->subscribing()->where('user_id', $user->id)->first());
    }
}
