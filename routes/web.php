<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;


Route::get('/', [TareasController::class, 'index'])->name('tareas.index');
Route::get('/create', [TareasController::class, 'create'])->name('tareas.create');
Route::post('/store', [TareasController::class, 'store'])->name('tareas.store');
Route::get('/edit/{id}', [TareasController::class, 'edit'])->name('tareas.edit');
Route::put('/update/{id}', [TareasController::class, 'update'])->name('tareas.update');
Route::get('/show/{id}', [TareasController::class, 'show'])->name('tareas.show');
Route::delete('/destroy/{id}', [TareasController::class, 'destroy'])->name('tareas.destroy');