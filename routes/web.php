<?php

use Illuminate\Support\Facades\Route;

// Existing route
Route::get('/', function () {
    echo 'Hello, World!';
});


// New route added
Route::get('/about', function () {
    echo 'About Us';
});
