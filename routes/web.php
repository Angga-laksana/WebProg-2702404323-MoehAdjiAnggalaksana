<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

// Route::get('/', function () {
//     // return view('welcome');
//     // redirect()->route('home');
// })->name('home');

// Route::get('/category', function () {
//     return view('category');
// })->name('category.index');

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/{slug}', [CategoryController::class,'show'])->name('category.show');
Route::get('/writers', [WriterController::class,'index'])->name('writers.index');
Route::get('/writer/{id}', [WriterController::class,'show'])->name('writers.show');
Route::get('/post/{slug}', [PostController::class,'show'])->name('post.show');
Route::get('/about', [AboutController::class,'index'])->name('about');
