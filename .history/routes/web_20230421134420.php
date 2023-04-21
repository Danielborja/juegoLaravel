<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('index', [LoginController::class, 'index'])->name('login');
Route::get('showregisterview', [LoginController::class, 'showRegisterView'])->name('showegisterview');
Route::get('showregisterview', [RegisterController::class, 'store'])->name('new-player');