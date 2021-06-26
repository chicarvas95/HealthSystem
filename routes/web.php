<?php

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


Route::get('/1', function () {
    return view('PerderPeso');
});

Route::get('/2', function () {
    return view('SeleccionaGenero');
});

Route::get('/3', function () {
    return view('PesoDeseado');
});

Route::get('/4', function () {
    return view('ComprobarMedidas');
});

Route::get('/6', function () {
    return view('DiaComun');
});

Route::get('/7', function () {
    return view('Encuesta');
});
Route::get('/8', function () {
    return view('HacesEjercicio');
});

Route::get('/9', function () {
    return view('CuantoDuermes');
});
Route::get('/10', function () {
    return view('PreparacionComida');
});
Route::get('/11', function () {
    return view('Restriccion');
});
Route::get('/12', function () {
    return view('Vegetales');
});
Route::get('/13', function () {
    return view('CerealesEnDieta');
});
Route::get('/14', function () {
    return view('ProductosEnDieta');
});
Route::get('/15', function () {
    return view('ProductosMarinos');
});
