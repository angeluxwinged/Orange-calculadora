<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CalculadoraController::class, 'index'])->name('inicio');

Route::prefix('medicina')->group(function () {
    Route::get('/', [CalculadoraController::class, 'medicina'])->name('medicina');
    Route::get('/IMC', [CalculadoraController::class, 'IMC'])->name('medicina.IMC');
});