@extends('layout')

@section('contenido')
    <h1>Farmacia Chespin</h1>
    <p>Bienvenido al sistema de Farmacia Chespin. Usa el menú lateral para navegar.</p>

    <div class="card-container">
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/proveedor">Proveedores</a>
        </div>
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/agregarUsuario">Usuarios</a>
        </div>
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/devolucion">Devoluciones</a>
        </div>
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/ventas">Ventas</a>
        </div>
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/listaVentas">Compras</a>
        </div>
        <div class="card">
            <div class="card-img"></div>
            <p>Registrados: #</p>
            <a href="/medicamentos">Inventario</a>
        </div>
    </div>
@endsection
