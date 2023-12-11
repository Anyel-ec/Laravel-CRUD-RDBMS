<?php

<<<<<<< HEAD
use App\Http\Controllers\PersonasController;
=======
<<<<<<< HEAD
use App\Http\Controllers\PersonasController;
=======
>>>>>>> c59921791c8de331781c600d88d0b4f1215afe5b
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
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
<<<<<<< HEAD

    Route::get('/', [PersonasController::class, 'index'])->name('persona.index');
    Route::get('/create', [PersonasController::class, 'create'])->name('persona.create');
    Route::post('/store', [PersonasController::class, 'store'])->name('persona.store');
    /* Route for editing a persona.*/
    Route::post('/edit/{id}', [PersonasController::class, 'edit'])->name('persona.edit');
    /*Route for updating a persona*/
    Route::post('/update/{id}', [PersonasController::class, 'update'])->name('persona.update');
    /*Route for deleting a persona*/
    Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('persona.destroy');
=======
<<<<<<< HEAD

    Route::get('/', [PersonasController::class, 'index'])->name('persona.index');
    Route::get('/create', [PersonasController::class, 'create'])->name('persona.create');
    //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
    Route::post('/store', [PersonasController::class, 'store'])->name('persona.store');
    Route::post('/edit/{id}', [PersonasController::class, 'edit'])->name('persona.edit');
    Route::post('/update/{id}', [PersonasController::class, 'update'])->name('persona.update');
    Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('persona.destroy');
=======
Route::get('/', [PersonasController::class, 'index'])->name('persona.index');
Route::get('/create', [PersonasController::class, 'create'])->name('persona.create');
//Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/store', [PersonasController::class, 'store'])->name('persona.store');
Route::post('/edit/{id}', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/update/{id}', [PersonasController::class, 'update'])->name('persona.update');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('persona.destroy');
>>>>>>> c59921791c8de331781c600d88d0b4f1215afe5b
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
