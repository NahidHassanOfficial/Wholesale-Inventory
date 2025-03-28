<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AuthRedirectMiddleware;
use Illuminate\Support\Facades\Route;

//Auth Pages
Route::inertia('/login', 'Auth/Login')->name('login')->middleware([AuthRedirectMiddleware::class]);
Route::inertia('/register', 'Auth/Signup')->name('register')->middleware([AuthRedirectMiddleware::class]);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Home Page
Route::redirect('/', '/dashboard')->name(name: 'index');

//Dashboard Pages
Route::prefix('dashboard')->middleware([AuthRedirectMiddleware::class])
    ->group(function () {

        Route::inertia('/', 'Backend/Dashboard')->name('dashboard');
        Route::inertia('/categories', 'Backend/Categories')->name('categories');
        Route::inertia('/inventory', 'Backend/Inventory')->name('inventory');
        Route::inertia('/reports', 'Backend/Reports')->name('reports');
        Route::inertia('/suppliers', 'Backend/Suppliers')->name('suppliers');
        Route::inertia('/orders', 'Backend/Orders')->name('orders');
        Route::inertia('/stores', 'Backend/ManageStore')->name('stores');

    });
