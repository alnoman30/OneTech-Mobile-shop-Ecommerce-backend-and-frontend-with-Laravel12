<?php

use App\Http\Controllers\AdminController;
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
    
});