<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Category;
use App\Ingredient;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        $categories = Category::all();
        return view('pizzas.create', compact('categories', 'ingredients'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $pizza = new Pizza();
        if(!array_key_exists('veg', $data)) {
            $data['veg'] = 0;
        } else {
            $data['veg'] = 1;
        }
        // $pizza->name = $data['name'];
        $pizza->fill($data);
        $pizza->save();

        if(array_key_exists('ingredients', $data)) {
            $pizza->ingredients()->attach($data['ingredients']);
        }

        return redirect()
            ->route('pizzas.index')
            ->with('message', 'La creazione è avvenuta con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        return view("pizzas.edit", compact("pizza"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $data = $request->all();

        if(!array_key_exists('veg', $data)) {
            $data['veg'] = 0;
        } else {
            $data['veg'] = 1;
        }

        $request->validate(
            [
                'name'=>'required|max:30',
                'ingredients'=>'required',
                'price'=>'required|numeric|min:0.50|max:99.99',
                'veg'=>'required'
            ]
        );

        $pizza->update($data);

        return redirect()
            ->route('pizzas.index')
            ->with('message', 'La modifica è avvenuta con successo!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
