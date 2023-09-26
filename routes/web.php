<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EtudiantController::class, 'index'])->name('Voir');
Route::get('/creer', [EtudiantController::class, 'create'])->name('Voir');

Route::post('/store', [EtudiantController::class, 'store'])->name('creer');

Route::get('/supprimer', [EtudiantController::class, 'destroy'])->name('supprimer');
Route::get('/Modifier', [EtudiantController::class, 'update'])->name('modifier');
Route::get('/editer', [EtudiantController::class, 'edit'])->name('edit');



