<?php

use Illuminate\Support\Facades\Route;



// Route to MainController index method
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

// New route added about
Route::get('/about', function () {
    echo 'About Us';
});


