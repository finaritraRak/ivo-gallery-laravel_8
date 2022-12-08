<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PagesController::class, 'index']);
//page
Route::resource('/blog', PostsController::class);
Route::get('/gallery', [\App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/upload', [\App\Http\Controllers\PagesController::class, 'upload'])->name('upload');
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::post('/store', [\App\Http\Controllers\PagesController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



//admin
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');


//category
Route::resource('/category_show', CategoryController::class);
Route::get('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::get('/savecategory', [App\Http\Controllers\CategoryController::class, 'saveCategory']);
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category']);



