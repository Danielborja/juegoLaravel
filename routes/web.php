<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('index', [LoginController::class, 'create'])->name('login');
Route::post('iniciar', [LoginController::class, 'store'])->name('iniciar');
Route::post('resultado_boton/{id}', [JuegoController::class, 'create'])->name('resultado_boton');
Route::get('new-form', [RegisterController::class, 'create'])->name('new-form');
Route::post('new-player', [RegisterController::class, 'store'])->name('new-player');
Route::get('try_again', [JuegoController::class,'tryAgain'])->name('try_again');

// Route::get('index', [LoginController::class, 'index'])->name('login');
// Route::get('new-form', [RegisterController::class, 'create'])->name('new-form');
// Route::post('new-player', [RegisterController::class, 'store'])->name('new-player');


