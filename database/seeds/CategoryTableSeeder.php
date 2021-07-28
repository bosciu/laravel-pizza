<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            'bianca',
            'rossa',
            'vegetariana'
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;

            $newCategory->save();
        }
    }
}
