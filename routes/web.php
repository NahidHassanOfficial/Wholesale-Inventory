<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

//Auth Pages
Route::inertia('/login', 'Auth/Login')->name('login');
Route::inertia('/register', 'Auth/Signup')->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Home Page
Route::redirect('/', '/dashboard')->name(name: 'index');

//Dashboard Pages
Route::prefix('dashboard')->middleware([])
    ->group(function () {

        Route::inertia('/', 'Backend/Dashboard')->name('dashboard');

    });
Route::inertia('/reports', 'Backend/Reports')->name('reports');
Route::inertia('/stores', 'Backend/ManageStore')->name('stores');