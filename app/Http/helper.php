<?php

namespace App;
use Illuminate\Http\Request;

function is_path($path){
    return call_user_func_array('Request::is', (array)$path) ? true : false;
} 





?>