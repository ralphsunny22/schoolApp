<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function users(){
        return $this->hasMany('\App\User');
    }

    public function scales()
    {
        return $this->hasMany('\App\Scale');
    }

    

    // public function user()
    // {
    //     return $this->belongsTo(Level::class, 'level');
    // }


}
