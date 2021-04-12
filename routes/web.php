<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//Novedades editoriales
Route::get('/acemilas', function () {
    return view('acemilas');
})->name('acemilas');
//Contacto
Route::get('/cajeta', function () {
    return view('cajeta');
})->name('cajeta');
//Colaboradores
Route::get('/establo', function () {
    return view('establo');
})->name('establo');

//vista individual de colaborador
Route::get('/establo/{id}', function () {
    return view('autor');
});


//Contenido (blog)
Route::get('/jocoque', function () {
    return view('jocoque');
})->name('jocoque');

//vista individual blog
Route::get('/jocoque/{id}', function () {
    return view('post');
});
