<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



// Route to MainController index method
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

// New route added about
Route::get('/about', function () {
    echo 'About Us';
});

// Authentication routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/cadastro', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/loginSubmit', [App\Http\Controllers\AuthController::class, 'loginSubmit']);


