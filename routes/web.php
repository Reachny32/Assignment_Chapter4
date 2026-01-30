<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Assignment1\ProductController;
use App\Http\Controllers\Assignment2\DashboardController;

// Assignment 1
Route::get('/product/{id?}', [ProductController::class, 'show'])
     ->whereNumber('id');

// Assignment 2
Route::get('/dashboard', [DashboardController::class, 'index'])
     ->middleware('auth.custom');

Route::get('/', function () {
    return view('welcome');
});
