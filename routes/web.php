<?php

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

Route::get('/docentes/{codigo}', function ($codigo) {
    return view('docentes', ['claves' => $codigo]);
});
Route::get('/estudiantes', function () {
    return view('estudiantes');
})->name("alumnos");
