<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/', [PersonasController::class, 'index'])->name('persona.index');
    Route::get('/create', [PersonasController::class, 'create'])->name('persona.create');
    //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
    Route::post('/store', [PersonasController::class, 'store'])->name('persona.store');
    Route::post('/edit/{id}', [PersonasController::class, 'edit'])->name('persona.edit');
    Route::post('/update/{id}', [PersonasController::class, 'update'])->name('persona.update');
    Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('persona.destroy');
