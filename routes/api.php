<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ItemController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('heroes', HeroController::class);
Route::post('heroes/{heroId}/inventory', [InventoryController::class, 'addItem']);
Route::delete('heroes/{heroId}/inventory/{itemId}', [InventoryController::class, 'removeItem']);
Route::post('heroes/{heroId}/choices', [ChoiceController::class, 'store']);
Route::get('heroes/{heroId}/choices', [ChoiceController::class, 'index']);
Route::get('items', [ItemController::class, 'index']);