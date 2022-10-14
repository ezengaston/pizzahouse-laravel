<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() 
    {
        $pizzas = Pizza::all();
      
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        echo($id);
        return view('pizzas.show');
    }

    public function create()
    {
        return view('pizzas.create');
    }
}
