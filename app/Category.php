<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function pizzas(){
        return $this->hasMany('App\Pizza');
    }
}
