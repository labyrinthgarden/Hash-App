<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HashController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/login', function() {
    return view('pages.login');
})->name('login');
Route::get('/register', function() {
    return view(('pages.register'));
})->name('register');

Route::get('/easterEgg', function () {
    return view('easterEgg');
});

Route::get('/hash', [HashController::class, 'index']);
