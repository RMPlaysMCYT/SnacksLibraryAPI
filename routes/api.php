<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;

// Route::get('/products', [ProductsController::class, 'index'])->name('api.products.index');
// Route::post('/products', [ProductsController::class, 'store']);
// Route::get('/products/{id}', [ProductsController::class, 'show']);
// Route::put('/products/{id}', [ProductsController::class, 'update']);
// Route::delete('/products/{id}', [ProductsController::class, 'destroy']);

Route::apiResource('products', ProductsController::class);
