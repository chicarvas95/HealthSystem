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

Route::get('/', function () {
    return view('DiaComun');
});

Route::get('/Encuesta-comidas-al-dia', function () {
    return view('Encuesta');
});
Route::get('/Encuesta-ejercicio-al-dia', function () {
    return view('HacesEjercicio');
});

Route::get('/Encuesta-cuanto-duermes', function () {
    return view('CuantoDuermes');
});
Route::get('/Encuesta-preparacion-comida', function () {
    return view('PreparacionComida');
});
Route::get('/Restriccion-dieta', function () {
    return view('Restriccion');
});
Route::get('/Vegetales-en-dieta', function () {
    return view('Vegetales');
});
Route::get('/cereales-en-dieta', function () {
    return view('CerealesEnDieta');
});
Route::get('/agregar-otros-productos-en-dieta', function () {
    return view('ProductosEnDieta');
});
Route::get('/agregar-productos-marinos', function () {
    return view('ProductosMarinos');
});
/*comentarios de pruebas*/
