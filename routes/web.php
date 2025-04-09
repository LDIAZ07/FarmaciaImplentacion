<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/farmacia', function () {
    return view('index');
});

Route::get('/devolucion/{x}', 'App\Http\Controllers\DevolucionController@index');
Route::resource('/proveedor', 'App\Http\Controllers\ProveedoresController');
Route::resource('/listaVentas', 'App\Http\Controllers\VentaDetallesController');
Route::get('/proveedorEliminar/{x}', 'App\Http\Controllers\ProveedoresController@destroy');
Route::get('/agregarProveedores', 'App\Http\Controllers\ProveedoresController@create');

Route::resource('/ventas', 'App\Http\Controllers\VentaController');
Route::resource('/devolucion', 'App\Http\Controllers\DevolucionController');
