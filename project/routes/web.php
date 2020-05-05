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

Route::get('/', 'ControladorRegistros@principal')->name('reg_ent');

Route::get('registro_salida', 'ControladorRegistros@registroSalida')->name('reg_salida');

Route::get('alta_vehiculo_residente','ControladorRegistros@altaResidente')->name('alta_v_res');

Route::get('alta_vehiculo_oficial','ControladorRegistros@altaOficial')->name('alta_v_of');

Route::get('pago_residente', 'ControladorRegistros@pagoResidente')->name('pago_residente');




