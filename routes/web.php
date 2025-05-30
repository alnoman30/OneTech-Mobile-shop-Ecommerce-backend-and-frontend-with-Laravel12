<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Brand;
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
    
    // Admin panel CATEGORY TAB
    Route::get('/admin/categories/', [AdminController::class, 'category'])->name('admin.category');
    Route::get('/admin/categories-create/', [CategoryController::class, 'create'])->name('admin.category.add');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    // Admin panel BRAND TAB
    Route::get('/admin/brands/', [AdminController::class, 'brand'])->name('admin.brand');
    Route::get('/admin/brands-create/', [BrandController::class, 'create'])->name('admin.brand.add');
    Route::post('/admin/brands/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::get('/admin/brands/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::put('/admin/brands/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::delete('/admin/brands/delete/{id}', [BrandController::class, 'destroy'])->name('admin.brand.delete');

});