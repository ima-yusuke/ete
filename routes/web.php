<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;

Route::get('/', [MainController::class, 'Show'])->name('Show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/category', [CategoryController::class, 'ShowCategory'])->name('show.category');
    Route::post('/dashboard/category', [CategoryController::class, 'AddCategory'])->name('add.category');
    Route::patch('/dashboard/category', [CategoryController::class, 'AddCategory'])->name('edit.category');
    Route::delete('/dashboard/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');

});

require __DIR__.'/auth.php';
