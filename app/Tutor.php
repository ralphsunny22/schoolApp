<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //
    public function faculty(){
        return $this->belongsTo('App\Faculty');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function scales()
    {
        return $this->hasMany('\App\Scale');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    
}
