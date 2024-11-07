<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('products', [PokemonController::class, 'index']);
Route::get('products/create', [PokemonController::class, 'create']);
Route::post('products', [PokemonController::class, 'store']);
Route::get('products/{id}/edit', [PokemonController::class, 'edit']);
Route::put('products/{id}', [PokemonController::class, 'update']);
Route::delete('products/{id}', [PokemonController::class, 'destroy']);