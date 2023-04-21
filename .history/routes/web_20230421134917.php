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
Route::get('new-player', [LoginController::class, 'store'])->name('new-player');
Route::get('new-player', [LoginController::class, 'store'])->name('new-player');


Route::get('new-form',[StudentController::class, 'create']);
Route::post('new-student',[StudentController::class, 'store']);