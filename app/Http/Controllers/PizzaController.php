<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'capricosa', 'base' => 'peparoni and stuff', 'price'=> 11],
            ['type' => 'vezuvio', 'base' => 'cheesy', 'price'=> 9],
            ['type' => 'fungy', 'base' => 'mashrooms', 'price'=> 10]
        ];
        return view('pizzas', ['pizzas'  => $pizzas]);
    }

    public function show($id){
        return view('details',['id' => $id]);
    }
}
