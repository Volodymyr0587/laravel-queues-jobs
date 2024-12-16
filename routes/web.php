<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
