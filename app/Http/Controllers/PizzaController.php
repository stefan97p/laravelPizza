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
        return view('pizzas.show',['id' => $id]);
    }
}
