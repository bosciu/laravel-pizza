<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['Mozzarella', 'Pomodoro', 'Alici', 'Funghi porcini', 'prosciutto cotto'];

        foreach ($ingredients as $ingredient) {
            
            $newIngredient = new Ingredient();

            $newIngredient->name = $ingredient;
            $newIngredient->slug = Str::slug($ingredient, '-');

            $newIngredient->save();

        }
    }
}
