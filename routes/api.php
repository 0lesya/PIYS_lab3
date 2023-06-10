<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/articles', [ArticleController::class, 'create']);
Route::patch('/articles/{id}', [ArticleController::class, 'patch']);
Route::delete('/articles/{id}', [ArticleController::class, 'delete']);
Route::get('/articles/{id}', [ArticleController::class, 'get']);

