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

Route::get('/', 'PageController@welcome')->name('welcome');

Route::resource('/admin/productos', 'ProductosController');
Route::resource('/admin/categorias', 'CategoriasController');
Route::resource('/admin/compras', 'ComprasController');
Route::resource('/admin/usuarios', 'UsuariosController');

Route::get('/usuario/admin?', 'UsuariosController@getTipo');
Route::get('/usuario/logged', 'UsuariosController@getUserlogged');
Route::put('/usuario/cambiarTipo/{id?}', 'UsuariosController@cambiarTipo');

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home');
