<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public function tutors(){
        return $this->hasMany('App\Tutor');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }
    
}
