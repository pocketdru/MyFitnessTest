<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function food(){
        return $this->hasMany('App\Food');
    }
}
