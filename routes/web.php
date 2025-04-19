<?php

use Illuminate\Support\Facades\Route;
use App\Models\Proveedor;
use App\Models\User;
use App\Models\Devolucion;
use App\Models\Venta;
use App\Models\Compra;
use App\Models\Medicamento;

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
Route::get('/agregarProveedores', 'App\Http\Controllers\ProveedoresController@store');
Route::get('/editarProveedores/{x}', 'App\Http\Controllers\ProveedoresController@edit');
Route::put('/updateProveedores/{x}', 'App\Http\Controllers\ProveedoresController@update');
Route::get('/guardarMedicamento', 'App\Http\Controllers\MedicamentosController@create');

// Route::resource('/login', 'App\Http\Controllers\UsuarioController');
Route::post('/login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('login');
Route::resource('/ventas', 'App\Http\Controllers\VentaController');
Route::resource('/compras', 'App\Http\Controllers\ComprasController');
Route::get('/listaCompras', 'App\Http\Controllers\ComprasController@show');
Route::resource('/devolucion', 'App\Http\Controllers\DevolucionController');


Route::get('/farmacia', function () {
    $totalProveedores = Proveedor::count();
    $totalUsuarios = User::count();
    $totalDevoluciones = Devolucion::count();
    $totalVentas = Venta::count();
    $totalCompras = Compra::count();
    $totalMedicamentos = Medicamento::count();
    return view('index', compact(
        'totalProveedores',
        'totalUsuarios',
        'totalDevoluciones',
        'totalVentas',
        'totalCompras',
        'totalMedicamentos'
    ));
});