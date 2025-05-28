<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('pages.blog');
















// Admin login only
Route::get('/admin-login', function(){
    return view('admin.login');
})->name('admin.login');
// Different Dashboard for USER and ADMIN
Route::get('/dashboard', [HomeController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->group(function () {
    
    Route::get('/admin/categories/', [AdminController::class, 'category'])->name('admin.category');
    Route::get('/admin/categories-create/', [CategoryController::class, 'create'])->name('admin.category.add');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

});