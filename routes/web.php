<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class, 'getArticles'])->name('articles.index');
Route::post('/create', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/author/{id}', [ArticleController::class, 'articlesByAuthor']);


Route::get('/create', [AuthorController::class, 'getAuthors']);
Route::get('/home', [AuthorController::class, 'getAuthors']);
Route::get('/top', [AuthorController::class, 'getTopAuthors']);
