<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend.home.index')->name('home');
Route::view('/contact', 'frontend.contact.index')->name('contact');

Route::middleware('guest')->group(function () {
    Route::get('/register' , [RegisterController::class , 'index'])->name('register');
    Route::post('/register' , [RegisterController::class , 'store'])->name('register.store');

    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login' , [LoginController::class , 'store'])->name('store');
});

// Route::prefix('user')->as('user.')->middleware('auth')->group(function() {
    // Route::get('/' , )
// });

Route::get('/admin'  , [CategoryController::class , 'index'])->name('admin');

Route::get('/admin/category'  , [CategoryController::class , 'show'])->name('admin.category');

Route::post('/admin/category/create'  , [CategoryController::class , 'store'])->name('admin.category.store');

Route::post('/admin/category/destroy/{category}'  , [CategoryController::class , 'destroy'])->name('admin.category.destroy');

Route::get('/admin/category/edit/{category}'  , [CategoryController::class , 'edit'])->name('admin.category.edit');

Route::post('/admin/category/update/{category}'  , [CategoryController::class , 'update'])->name('admin.category.update');

Route::get('/admin/post'  , [PostController::class , 'index'])->name('admin.post');

Route::post('/admin/post/create'  , [PostController::class , 'store'])->name('admin.post.store');



