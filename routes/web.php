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

// Route::get('/', function () {
//     return view('Perderpeso');
// });
Route::get('/', 'DireccionamientoRutasController@Vista1');
Route::get('/seleccionar-genero', 'DireccionamientoRutasController@Vista2');
Route::get('/peso-deseado', 'DireccionamientoRutasController@Vista3');
Route::get('/comprobar-medidas', 'DireccionamientoRutasController@Vista4');
Route::get('/dia-comun', 'DireccionamientoRutasController@Vista5');
Route::get('/haces-ejercicio', 'DireccionamientoRutasController@Vista6');
Route::get('/cuanto-duermes', 'DireccionamientoRutasController@Vista7');
Route::get('/preparacion-comida', 'DireccionamientoRutasController@Vista8');
Route::get('/restriccion-alimenticia-o-alergia', 'DireccionamientoRutasController@Vista9');
Route::get('/agregar-vegetales', 'DireccionamientoRutasController@Vista10');
Route::get('/agregar-cereales', 'DireccionamientoRutasController@Vista11');
Route::get('/agregar-productos', 'DireccionamientoRutasController@Vista12');
Route::get('/agregar-productos-marinos-o-carnes', 'DireccionamientoRutasController@Vista13');


