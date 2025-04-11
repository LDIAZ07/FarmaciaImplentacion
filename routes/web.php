<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('login.login');
});

Route::get('/farmacia', function () {
    return view('index');
});

Route::get('/devolucion/{x}', 'App\Http\Controllers\DevolucionController@index');
Route::resource('/proveedor', 'App\Http\Controllers\ProveedoresController');
Route::resource('/listaVentas', 'App\Http\Controllers\VentaDetallesController');
Route::resource('/medicamentos', 'App\Http\Controllers\MedicamentosController');
Route::get('/proveedorEliminar/{x}', 'App\Http\Controllers\ProveedoresController@destroy');
Route::get('/agregarProveedores', 'App\Http\Controllers\ProveedoresController@create');
Route::get('/guardarMedicamento', 'App\Http\Controllers\MedicamentosController@create');

// Route::resource('/login', 'App\Http\Controllers\UsuarioController');
Route::post('/login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login');
Route::resource('/ventas', 'App\Http\Controllers\VentaController');
Route::resource('/compras', 'App\Http\Controllers\ComprasController');
Route::resource('/devolucion', 'App\Http\Controllers\DevolucionController');
