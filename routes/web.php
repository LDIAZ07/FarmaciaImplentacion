<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/farmacia', function () {
    return view('index');
});

Route::resource('/proveedor', 'App\Http\Controllers\ProveedoresController');
Route::get('/proveedorEliminar/{x}', 'App\Http\Controllers\ProveedoresController@destroy');
Route::get('/agregarProveedores', 'App\Http\Controllers\ProveedoresController@create');

Route::resource('/ventas', 'App\Http\Controllers\VentaController');
