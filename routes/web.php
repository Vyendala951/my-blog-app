<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',    [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/save',  [PostController::class, 'storeOrUpdate'])->name('posts.save');
Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
