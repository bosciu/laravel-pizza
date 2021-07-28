<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        "name",
        "ingredients",
        "price",
        "veg",
        "category_id"
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
