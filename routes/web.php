<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

route::get("/", [ArticleController::class, 'index'])->name('index.index');
route::get("/articles/{id}", [ArticleController::class, 'show'])->name('articles.show');
