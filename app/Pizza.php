<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        "name",
        "description",
        "price",
        "veg",
        "category_id"
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function ingredients(){
        return $this->belongsToMany('App\Ingredient');
    }
}
