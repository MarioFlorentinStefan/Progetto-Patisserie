<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ProductController;

// Route Pubblic
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
// Route Article
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
Route::get('/article/edit{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::get('/article/show/{article}',  [ArticleController::class, 'show'])->name('article.show');
// Route Product
Route::get('/product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit{product}',[ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/show/{product}',  [ProductController::class, 'show'])->name('product.show');

// Route Counter
// Route::get('/subscriptions', [CounterController::class, 'index'])->name('subscriptions');
// Route Reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');