<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class HomeController extends Controller
{
    public function index() 
    {
        $pizza = Pizza::all();
        return view('home', compact('pizza'));
    }
}
