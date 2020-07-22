<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    private function users(){
        return $this->belongsToMany('App\User');
    }
}
