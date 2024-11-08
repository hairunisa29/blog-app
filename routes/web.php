<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;

route::get("/", [ArticleController::class, 'index'])->name('articles.index');
route::get("/articles/detail/{id}", [ArticleController::class, 'show'])->name('articles.show');
route::get("/articles/add", [ArticleController::class, 'create'])->name('articles.add');
route::post("/articles/store", [ArticleController::class, 'store'])->name('articles.store');
route::get("/articles/edit/{id}", [ArticleController::class, 'edit'])->name('articles.edit');
route::put("/articles/update/{id}", [ArticleController::class, 'update'])->name('articles.update');
route::delete("/articles/delete/{id}", [ArticleController::class, 'destroy'])->name('articles.destroy');

route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
