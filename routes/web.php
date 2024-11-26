<?php

use Illuminate\Support\Facades\Route;

//Auth Pages
Route::inertia('/login', 'Auth/Login')->name('login');
Route::inertia('/register', 'Auth/Signup')->name('register');

//Home Page
Route::redirect('/', '/dashboard')->name(name: 'index');

//Dashboard Pages
Route::prefix('dashboard')->middleware([])
    ->group(function () {

        Route::inertia('/', '')->name('dashboard');

    });
