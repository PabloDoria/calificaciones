<?php

use App\Http\Controllers\ActividadeController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('actividades', ActividadeController::class);
Route::resource('materias', MateriaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
