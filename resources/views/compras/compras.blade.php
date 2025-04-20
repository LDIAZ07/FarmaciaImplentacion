@extends('layout')

@section('contenido')

<h2>Registrar Compra</h2>

<form action="/medicamentos" method="post" class="formulario-compras">
        @csrf
        <input type="hidden" name="proveedor_id" id="proveedor_id">

        <div>
            <label for="">Nombre del Medicamento</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div>
            <label for="">Proveedor</label>
            <select id="proveedor" name="proveedor">
            <option value="" selected disabled>Seleccione un Proveedor</option>
                @foreach ($lProveedor as $proveedores)
                <option value="{{$proveedores->nombre}}" data-id="{{$proveedores->id}}">
                    {{$proveedores->nombre}}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Principio Activo</label>
            <input type="text" name="principio_activo" id="principio_activo">
        </div>

        <div>
            <label for="">Presentacion</label>
            <input type="text" name="presentacion" id="presentacion">
        </div>

        <div>
            <label for="">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad">
        </div>

        <div>
            <label for="">Stock Minimos</label>
            <input type="number" name="stock_minimo" id="stock_minimo">
        </div>


        <div>
            <label for="">Precio</label>
            <input type="number" name="precio" id="precio">
        </div>

        <div>
            <label for="">Fecha de Vencimiento</label>
            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento">
        </div>

        <div>
            <label for="">Total</label>
            <input type="text" name="total" id="total" readonly>
        </div>

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

        <div class="formulario-ventas">
            <button type="submit" class="boton-comprar" disabled>Terminar Compra</button>
        </div>
        

    </form>

    <script>
    const btn = document.querySelector('.boton-comprar');

    const inputs = {
        nombre: document.getElementById('nombre'),
        proveedor: document.getElementById('proveedor'),
        principio: document.getElementById('principio_activo'),
        presentacion: document.getElementById('presentacion'),
        cantidad: document.getElementById('cantidad'),
        stock: document.getElementById('stock_minimo'),
        precio: document.getElementById('precio'),
        fecha: document.getElementById('fecha_vencimiento'),
    };

    function validar() {
    const nombre = inputs.nombre.value.trim();
    const proveedor = inputs.proveedor.value;
    const principio = inputs.principio.value.trim();
    const presentacion = inputs.presentacion.value.trim();
    const cantidad = parseInt(inputs.cantidad.value);
    const stock = parseInt(inputs.stock.value);
    const precio = parseFloat(inputs.precio.value);
    const fechaStr = inputs.fecha.value.trim();

    let fechaValida = false;
    if (fechaStr !== "") {
        const hoy = new Date();
        const fechaIngresada = new Date(fechaStr);
        fechaIngresada.setHours(0, 0, 0, 0);
        hoy.setHours(0, 0, 0, 0);

        fechaValida = fechaIngresada > hoy;
    }

    const valido = (
        nombre !== "" &&
        proveedor !== "" &&
        principio !== "" &&
        presentacion !== "" &&
        !isNaN(cantidad) && cantidad > 0 &&
        !isNaN(stock) && stock > 0 &&
        !isNaN(precio) && precio > 0 &&
        fechaValida
    );

    btn.disabled = !valido;
}

    const selectProveedor = document.getElementById('proveedor');
    const inputPrecio = document.getElementById('precio');
    const inputCantidad = document.getElementById('cantidad');
    const inputTotal = document.getElementById('total');
    const inputProveedorId = document.getElementById('proveedor_id');

    function actualizarPrecioYTotal() {
        const selectedOption = selectProveedor.options[selectProveedor.selectedIndex];
        const precio = parseFloat(inputPrecio.value) || 0;
        const cantidad = parseInt(inputCantidad.value) || 0;
        const proveedorId = selectedOption.getAttribute('data-id') || ""; 

        inputTotal.value = (precio * cantidad).toFixed(2);
        inputProveedorId.value = proveedorId;
    }

    inputCantidad.addEventListener('input', actualizarPrecioYTotal);
    inputPrecio.addEventListener('input', actualizarPrecioYTotal);
    // window.addEventListener('DOMContentLoaded', actualizarPrecioYTotal);

    Object.values(inputs).forEach(input => {
        input.addEventListener('input', validar);
        input.addEventListener('change', validar); // para el <select>
    });
    </script>

<hr>


@endsection
