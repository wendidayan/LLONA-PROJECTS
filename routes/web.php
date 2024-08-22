<?php

use Illuminate\Support\Facades\Route;

// Route for the homepage
Route::get('/', function () {
    return view('homepage');
});

// Route for the about page
Route::get('/about', function () {
    return view('about');
});

// Route for the content page
Route::get('/content', function () {
    return view('content');
});
