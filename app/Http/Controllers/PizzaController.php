<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = Pizza::latest()->get();
          
        return view('pizzas.index', ['pizzas'  => $pizzas]);
    }

    public function show($id){

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show',['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }
}
