<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriberController;
use App\Models\Brand;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('pages.blog');

Route::get('/contact', [ContactController::class, 'contactPage'])->name('pages.contact');
Route::post('/contact/store', [ContactController::class, 'contactStore'])->name('pages.contact.store');
















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
  
    // sub category
    Route::get('/admin/categories/sub-category', [CategoryController::class, 'subCat'])->name('admin.sub_category');
    Route::get('/admin/sub-categories-create/', [CategoryController::class, 'sub_create'])->name('admin.subcategory.add');
    Route::post('/admin/sub-categories-store/', [CategoryController::class, 'sub_store'])->name('admin.subcategory.store');
    Route::get('/admin/sub-categories/edit/{id}', [CategoryController::class, 'sub_edit'])->name('admin.scategory.edit');
    Route::put('/admin/sub-categories/update/{id}', [CategoryController::class, 'sub_update'])->name('admin.scategory.update');
    Route::delete('/admin/sub-categories/delete/{id}', [CategoryController::class, 'sub_destroy'])->name('admin.scategory.delete');
     // sub category

    //  Child category
    Route::get('/admin/child-category', [CategoryController::class, 'childCat'])->name('admin.child_category');
    Route::get('/admin/child-category/create', [CategoryController::class, 'child_create'])->name('admin.child_category.create');
    Route::post('/admin/child-category/store', [CategoryController::class, 'child_store'])->name('admin.child_category.store');
    Route::get('/admin/child-category/edit/{id}', [CategoryController::class, 'child_edit'])->name('admin.child_category.edit');
    Route::put('/admin/child-category/update/{id}', [CategoryController::class, 'child_update'])->name('admin.child_category.update');
    Route::delete('/admin/child-category/delete/{id}', [CategoryController::class, 'child_destroy'])->name('admin.child_category.delete');
    //  Child category
 
   // Admin panel BRAND TAB
    Route::get('/admin/brands/', [AdminController::class, 'brand'])->name('admin.brand');
    Route::get('/admin/brands-create/', [BrandController::class, 'create'])->name('admin.brand.add');
    Route::post('/admin/brands/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::get('/admin/brands/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::put('/admin/brands/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::delete('/admin/brands/delete/{id}', [BrandController::class, 'destroy'])->name('admin.brand.delete');

    // Admin CRM Subscriber TAB
    Route::get('/admin/subscribers/', [SubscriberController::class, 'subscriber'])->name('admin.subscriber');
    Route::post('/admin/subscribers/store', [SubscriberController::class, 'subscriber_store'])->name('admin.subscriber.store');
});