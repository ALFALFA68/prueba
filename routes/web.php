<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', function () {
    return "Página de Login";
})->name('login');