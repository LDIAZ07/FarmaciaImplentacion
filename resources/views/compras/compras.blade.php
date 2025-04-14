@extends('layout')

@section('contenido')

<h2>Registrar Compra</h2>

<form action="/medicamentos" method="post" class="formulario-compras">
        @csrf
        <input type="hidden" name="proveedor_id" id="proveedor_id">

        <div>
            <label for="">Nombre del Medicamento</label>
            <input type="text" name="nombre" id="">
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

        <!--Funciona como stock actual-->
        <div>
            <label for="">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad">
        </div>

        <div>
            <label for="">Stock Minimos</label>
            <input type="text" name="stock_minimo" id="stock_minimo">
        </div>


        <div>
            <label for="">Precio</label>
            <input type="number" name="precio" id="precio">
        </div>

        <div>
            <label for="">Fecha de Vencimiento</label>
            <input type="text" name="fecha_vencimiento" id="fecha_vencimiento">
        </div>

        <div>
            <label for="">Total</label>
            <input type="text" name="total" id="total" readonly>
        </div>

        <button type="submit" class="boton-comprar">Guardar</button>

    </form>

    <script>
    const selectProveedor = document.getElementById('proveedor');
    const inputPrecio = document.getElementById('precio');
    const inputCantidad = document.getElementById('cantidad');
    const inputTotal = document.getElementById('total');
    const inputProveedorId = document.getElementById('proveedor_id');
    // const inputMedicamentoStock = document.getElementById('stock_actual');
    // const inputStockRestante = document.getElementById('stock_restante');
    // const inputPrecio = document.getElementById('precio');

    function actualizarPrecioYTotal() {
        const selectedOption = selectProveedor.options[selectProveedor.selectedIndex];
        const precio = parseFloat(inputPrecio.value) || 0;
        const cantidad = parseInt(inputCantidad.value) || 0;
        const proveedorId = selectedOption.getAttribute('data-id') || "";
        // const stock_actual = parseInt(selectedOption.getAttribute('data-stock')) || 0; 

        // inputPrecio.value = precio.toFixed(2);
        inputTotal.value = (precio * cantidad).toFixed(2);
        inputProveedorId.value = proveedorId;
        // inputMedicamentoStock.value = stock_actual;
        // inputStockRestante.value = stock_actual - cantidad;
    }

    // selectMedicamento.addEventListener('change', actualizarPrecioYTotal);
    inputCantidad.addEventListener('input', actualizarPrecioYTotal);
    inputPrecio.addEventListener('input', actualizarPrecioYTotal);
    // window.addEventListener('DOMContentLoaded', actualizarPrecioYTotal);
    </script>



<!-- <form action="/compras" method="post" class="formulario-compras">
    @csrf

    <div>
        <label for="codigo">Código?</label>
        <input type="text" id="codigo" name="codigo">
    </div>

    <div>
        <label for="proveedor">Nombre Proveedor</label>
        <input type="text" id="proveedor" name="proveedor">
    </div>

    <div>
        <label for="principio">Principio activo</label>
        <select id="principio" name="principio">
            <option value="">Seleccione...</option>
        </select>
    </div>

    <div>
        <label for="presentacion">Presentación</label>
        <select id="presentacion" name="presentacion">
            <option value="">Seleccione...</option>
        </select>
    </div>

    <div>
        <label for="precio_unitario">Precio unitario</label>
        <input type="number" id="precio_unitario" name="precio_unitario" step="0.01">
    </div>

    <div>
        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad">
    </div>

    <div>
        <label for="vencimiento">Fecha de vencimiento</label>
        <input type="date" id="vencimiento" name="vencimiento">
    </div>

    <div>
        <label for="precio_venta">Precio venta</label>
        <input type="number" id="precio_venta" name="precio_venta" step="0.01">
    </div>

    <div>
        <label for="total">Total</label>
        <input type="text" id="total" name="total" readonly>
    </div>

    <button type="submit" class="boton-comprar">Comprar</button>
</form> -->

<button class="btn-lateral-compras">Comprar Producto Existente</button>

<hr>

<!-- <h2>Lista de Compras</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Compra</th>
            <th>Medicamento</th>
            <th>Proveedor</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->id }}</td>
                <td>{{ $compra->medicamento->nombre ?? 'N/A' }}</td>
                <td>{{ $compra->proovedor->nombre ?? 'N/A' }}</td>
                <td>{{ $compra->cantidad }}</td>
                <td>{{ $compra->precio_unitario }}</td>
                <td>${{ number_format($compra->cantidad * $compra->precio_unitario, 2) }}</td>
                <td>{{ $compra->created_at->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    </tbody>
</table> -->

@endsection


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>

<h2>Lista de Compras</h2>
    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>ID Compra</th>
                <th>Medicamento</th>
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra->medicamento->nombre ?? 'N/A' }}</td>
                    <td>{{ $compra->proovedor->nombre ?? 'N/A' }}</td>
                    <td>{{ $compra->cantidad }}</td>
                    <td>{{ $compra->precio_unitario }}</td>
                    <td>${{ number_format($compra->cantidad * $compra->precio_unitario, 2) }}</td>
                    <td>{{ $compra->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
-->