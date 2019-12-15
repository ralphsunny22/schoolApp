<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Question extends Model
{
    //
    // public function setQueDateAttribute($input)
    // {
    //     $this->attributes['que_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');           
    // }


    // public function getQueDateAttribute($input)
    // {
    //     return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
    // }

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    //     'que_date'
    // ];

    public function tutor(){
        return $this->belongsTo('App\Tutor');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function scores(){
        return $this->hasMany('App\Score');
    }
    

}
