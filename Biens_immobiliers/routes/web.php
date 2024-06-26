<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AuthController;
use App\Models\Categorie;


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

// Route group for categories
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategorieController::class, 'index'])->name('index');
    Route::get('/create', [CategorieController::class, 'create'])->name('create');
    Route::post('/', [CategorieController::class, 'store'])->name('store');
    Route::get('/{categorie}/edit', [CategorieController::class, 'edit'])->name('edit');
    Route::put('/{categorie}', [CategorieController::class, 'update'])->name('update');
    Route::delete('/{categorie}', [CategorieController::class, 'destroy'])->name('destroy');
});

