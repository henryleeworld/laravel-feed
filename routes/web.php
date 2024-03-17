<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/articles/{article}', [ArticlesController::class, 'show'])
    ->name('articles.show');
Route::feeds();
