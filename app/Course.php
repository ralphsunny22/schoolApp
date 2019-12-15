<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guarded = [];

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function tutor(){
        return $this->belongsTo('App\Tutor');
    }

    public function level(){
        return $this->belongsTo('App\Level');
    }

    public function semester(){
        return $this->belongsTo('App\Semester');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function questions(){
        return $this->hasMnay('App\Question');
    }

    public function scores(){
        return $this->hasMany('App\Score');
    }

    public function scales()
    {
        return $this->hasMany('\App\Scale');
    }
    


}
