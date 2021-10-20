<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'capricosa', 'base' => 'peparoni and stuff', 'price'=> 11],
        ['type' => 'vezuvio', 'base' => 'cheesy', 'price'=> 9],
        ['type' => 'fungy', 'base' => 'mashrooms', 'price'=> 10]
        
    ];
    return view('pizzas', ['pizzas'  => $pizzas]);
});

Route::get('/pizzas/{is}', function ($id) {
    return view('details',['id' => $id]);
});