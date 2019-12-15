<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function gender(){
        return $this->belongsTo('App\Gender');
    }

    public function state(){
        return $this->belongsTo('App\State');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }
    
    public function level(){
        return $this->belongsTo('App\Level');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function tutor(){
        return $this->belongsTo('App\Tutor');
    }

    // public function level()
    // {
    //     return $this->hasMany(User::class, 'level');
    // }

    public function scores(){
        return $this->hasMany('App\Score');
    }

    public function scales()
    {
        return $this->hasMany('\App\Scale');
    }


}
