<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::post('/category/create', [CategoryController::class, 'createCategory'])->name('category.create');
    Route::patch('/category/edit', [CategoryController::class, 'editCategory'])->name('category.update');
    Route::delete('/category/delete/{categoryId}', [CategoryController::class, 'deleteCategory'])->name('category.delete');

    Route::post('/supplier/create', [SupplierController::class, 'createSupplier'])->name('supplier.create');
    Route::post('/supplier/edit', [SupplierController::class, 'editSupplier'])->name('supplier.update');
    Route::delete('/supplier/delete/{supplierId}', [SupplierController::class, 'deleteSupplier'])->name('supplier.delete');

    Route::post('/store/create', [StoreController::class, 'createStore'])->name('store.create');
    Route::post('/store/edit', [StoreController::class, 'editStore'])->name('store.update');
    Route::delete('/store/delete/{storeId}', [StoreController::class, 'deleteStore'])->name('store.delete');

});
