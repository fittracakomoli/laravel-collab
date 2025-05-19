<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlamaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::post('/ask-llama', [LlamaController::class, 'ask']);

Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/products', [ProductController::class, 'index']);

// Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/products/create', [ProductController::class, 'create']);

// Route::post('/products', [ProductController::class, 'store']);

// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// Route::put('/products/{id}', [ProductController::class, 'update']);

// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::resource('products', ProductController::class);

Route::get('/react', function () {
    return view('react');
});
