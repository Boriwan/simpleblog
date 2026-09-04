<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;



Route::get('/', [WelcomeController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/{article}', [ArticleController::class, 'show']);
