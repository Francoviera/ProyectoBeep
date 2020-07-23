<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
})->name('welcome');
Route::get('/productos', 'ProductosController@index')->name('productos');
Route::get('/inventario', 'ProductosController@paginate');

Route::resource('/admin/productos', 'ProductosController')->middleware('admin');
Route::resource('/admin/categorias', 'CategoriasController')->middleware('admin');
Route::resource('/admin/compras', 'ComprasController')->middleware('admin');
Route::resource('/admin/usuarios', 'UsuariosController')->middleware('admin');
Route::resource('/admin/proveedores', 'ProveedoresController')->middleware('admin');
Route::resource('/admin/pedidos', 'PedidosController')->middleware('admin');
Route::delete('/admin/pedido/{id?}', 'PedidosController@eliminar')->middleware('admin');
Route::get('/admin', 'HomeController@admin')->middleware('admin');

Route::get('/admin/users', 'HomeController@getUsers')->middleware('admin');
Route::get('/admin/admins', 'HomeController@getAdmins')->middleware('admin');

Route::get('/usuario/admin?', 'UsuariosController@getTipo');
Route::get('/usuario/logged', 'UsuariosController@getUserlogged');
Route::put('/usuario/cambiarTipo/{id?}', 'UsuariosController@cambiarTipo');

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home');