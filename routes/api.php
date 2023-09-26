<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ArticleController;

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
//Recuperer la liste
Route::get('posts', [PostController::class,'index']);

//Ajouter POST| PUT | PACTH

Route::post('/create', [PostController::class, 'store'])->name('');
Route::put('edit/{id}', [PostController::class, 'upadate']);

//partie Article

Route::get('/article', [ArticleController::class, 'index']);
Route::post('/article/create', [ArticleController::class ,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
