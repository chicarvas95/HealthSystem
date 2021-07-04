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
//     return view('PerderPeso');
// });
Route::get('/'                                  , 'DireccionamientoRutasController@Vista1')->name('direccion.index');
Route::post('seleccionar-genero'                , 'DireccionamientoRutasController@Vista2');
Route::post('peso-deseado'                      , 'DireccionamientoRutasController@Vista3');
Route::post('comprobar-medidas'                 , 'DireccionamientoRutasController@Vista4');
Route::post('dia-comun'                         , 'DireccionamientoRutasController@Vista5');
Route::post('haces-ejercicio'                   , 'DireccionamientoRutasController@Vista6');
Route::post('cuanto-duermes'                    , 'DireccionamientoRutasController@Vista7');
Route::post('preparacion-comida'                , 'DireccionamientoRutasController@Vista8');
Route::post('restriccion-alimenticia-o-alergia' , 'DireccionamientoRutasController@Vista9');
Route::post('agregar-vegetales'                 , 'DireccionamientoRutasController@Vista10');
Route::post('agregar-cereales'                  , 'DireccionamientoRutasController@Vista11');
Route::post('agregar-productos'                 , 'DireccionamientoRutasController@Vista12');
Route::post('agregar-productos-marinos-o-carnes', 'DireccionamientoRutasController@Vista13');
Route::post('fin-encuesta'                      , 'DireccionamientoRutasController@Vista14');