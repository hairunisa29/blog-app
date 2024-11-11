<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

route::get("/", [ArticleController::class, 'index'])->name('articles.index')->middleware('auth');
route::get("/articles/detail/{id}", [ArticleController::class, 'show'])->name('articles.show');
route::get("/articles/add", [ArticleController::class, 'create'])->name('articles.add');
route::post("/articles/store", [ArticleController::class, 'store'])->name('articles.store');
route::get("/articles/edit/{id}", [ArticleController::class, 'edit'])->name('articles.edit');
route::put("/articles/update/{id}", [ArticleController::class, 'update'])->name('articles.update');
route::delete("/articles/delete/{id}", [ArticleController::class, 'destroy'])->name('articles.destroy');

route::get('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store')->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
