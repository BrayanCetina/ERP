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

Route::post('/LoginComprobar', 'loginController@comprobarUser');

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/documentosVista', 'HomeController@documentosVista')->name('documentosVista');
Route::get('/pedimentosVista', 'HomeController@pedimentosVista')->name('pedimentosVista');
Route::get('/facturasVista', 'HomeController@facturacionVista')->name('facturasVista');
Route::get('/rastreoVista', 'HomeController@rastreoVista')->name('rastreoVista');

Route::get('/clientesVista', 'HomeController@clientesVista')->name('clientesVista');
Route::resource('clientes','ClientesController');
Route::get('/ofertasVista', 'HomeController@ofertasVista')->name('ofertasVista');
Route::get('/ofertasVistaTable', 'ofertasController@ofertasVistaTable')->name('ofertasVistaTable');
Route::get('/ofertasVistaAgregar', 'ofertasController@ofertasVistaAgregar')->name('ofertasVistaAgregar');
