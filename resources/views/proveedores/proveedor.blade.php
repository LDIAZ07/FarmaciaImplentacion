@extends('layout')

@section('contenido')
    <h1>Proveedores</h1>

    <form action="/agregarProveedores" method="GET" class="formulario-proveedor-simple">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del proveedor">
        <input type="email" name="email" id="correo" placeholder="Correo electrónico">
        <input type="number" name="telefono" id="telefono" placeholder="Teléfono">
        <div class="formulario-ventas">
            <button id="submit" type="submit" disabled>Agregar</button>
        </div>
        
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
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
                        <button onclick="window.location.href='/editarProveedores/{{ $proveedores->id }}'" class="accion-btn">✏️</button>
                        <button onclick="window.location.href='/proveedorEliminar/{{ $proveedores->id }}'" class="accion-btn">🗑️</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
    const inputNombre = document.getElementById('nombre');
    const inputCorreo = document.getElementById('correo');
    const inputTelefono = document.getElementById('telefono');

        function validar() {
        const telefono = parseInt(inputTelefono.value);

        if (
            inputNombre.value.trim() === "" ||
            inputCorreo.value.trim() === "" ||
            telefono.toString().length < 8
        ) {
            document.getElementById('submit').disabled = true;
        } else {
            document.getElementById('submit').disabled = false;
        }
    }

    inputNombre.addEventListener('input', validar);
    inputCorreo.addEventListener('input', validar);
    inputTelefono.addEventListener('input', validar);
    window.addEventListener('load', validar);
</script>
@endsection

