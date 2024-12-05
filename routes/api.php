<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::post('/category/create', [CategoryController::class, 'createCategory'])->name('category.create');
    Route::patch('/category/edit', [CategoryController::class, 'editCategory'])->name('category.update');
    Route::delete('/category/delete/{categoryId}', [CategoryController::class, 'deleteCategory'])->name('category.delete');

});
