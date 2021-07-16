<?php

use Illuminate\Database\Seeder;
use App\Pizza; 

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPizza = config('pizza'); 
        
        foreach ($arrayPizza as $item ) {

            $pizza = new Pizza(); 

            $pizza->name = $item['name']; 
            $pizza->ingredients = $item['ingredients'];
            $pizza->price = $item['price'];
            $pizza->veg = $item['veg'];

            $pizza->save(); 
        }
    }
}
