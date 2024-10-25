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
    return view('vistas.inicio');
});

Route::get('/catalogo', function () {
    return view('vistas.catalogo');
});

Route::get('/empleos', function () {
    return view('vistas.empleos');
});

Route::get('/quienes', function () {
    return view('vistas.quienes');
});
Route::get('/contacto', function () {
    return view('vistas.contacto');
});






