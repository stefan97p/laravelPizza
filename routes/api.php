<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pizzas', [restApiController::class, 'index']);
Route::get('pizza/{id}', [restApiController::class, 'show']);
Route::post('add', [restApiController::class, 'store']);
Route::put('pizza/{id}', [restApiController::class, 'update']);
Route::delete('pizza/{id}', [restApiController::class, 'destroy']);
