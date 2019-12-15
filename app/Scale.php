<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    //
    public function level(){
        return $this->belongsTo('App\Level');
    }

    public function tutor(){
        return $this->belongsTo('App\Tutor');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
