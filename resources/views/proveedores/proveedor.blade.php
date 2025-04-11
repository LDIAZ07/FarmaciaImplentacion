@extends('layout')

@section('contenido')
    <h1>Proveedores</h1>

    <form action="/agregarProveedores" method="GET" class="formulario-proveedor-simple">
        <input type="text" name="nombre" placeholder="Nombre del proveedor">
        <input type="email" name="correo" placeholder="Correo electrónico">
        <input type="text" name="telefono" placeholder="Teléfono">
        <button type="submit">Agregar</button>
    </form>

    <table class="tabla-proveedores">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lProveedores as $proveedores)
                <tr>
                    <td>{{ $proveedores->nombre }}</td>
                    <td>{{ $proveedores->email }}</td>
                    <td>{{ $proveedores->telefono }}</td>
                    <td>
                        <button class="accion-btn">✏️</button>
                        <button class="accion-btn">🗑️</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
</head>
<body>

    <h1>Proveedores</h1>

    <h3><a href="/agregarProveedores">Agregar Nuevo</a></h3>

    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre del Proveedor</td>
                <td>Telefono</td>
                <td>Correo electronico</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($lProveedores as $proveedores)

                <tr>
                    <td>{{$proveedores->id}}</td>
                    <td>{{$proveedores->nombre}}</td>
                    <td>{{$proveedores->telefono}}</td>
                    <td>{{$proveedores->email}}</td>
                    </tr>
                   

            @endforeach

        </tbody>
    </table>
</body>
</html>
-->

