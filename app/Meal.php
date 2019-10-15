<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
// User's Table
    public function food()
    {
        return $this->hasMany(Food::class, 'meal_id');
    }
}
