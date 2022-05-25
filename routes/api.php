<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('orders', [OrderController::class, 'index']);
Route::get('show/{id}', [OrderController::class, 'show']);
Route::post('store', [OrderController::class, 'store']);
Route::put('update/{id}', [OrderController::class, 'update']);
Route::delete('delete/{id}', [OrderController::class, 'delete']);
Route::get('active', [OrderController::class, 'activeOrders']);