<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');

Route::get('/blog-post/{id}', [App\Http\Controllers\FrontController::class, 'blogPost'])->name('blog-post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
