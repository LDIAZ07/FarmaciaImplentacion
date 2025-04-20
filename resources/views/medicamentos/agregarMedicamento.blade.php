<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Medicamento</title>
</head>
<body>

    <form action="/medicamentos" method="post">
        @csrf
        <label for="">Nombre del Medicamento</label>
        <input type="text" name="nombre" id="">


        <select id="proveedor" name="proveedor">
        <option value="" selected disabled>Seleccione un Proveedor</option>
            @foreach ($lProveedor as $proveedores)
            <option value="{{$proveedores->nombre}}" data-id="{{$proveedores->id}}">
                {{$proveedores->nombre}}
            </option>
            @endforeach
        </select>

        <input type="hidden" name="proveedor_id" id="proveedor_id">

        <label for="">Principio Activo</label>
        <input type="text" name="principio_activo" id="principio_activo">

        <label for="">Presentacion</label>
        <input type="text" name="presentacion" id="presentacion">

        <!--Funciona como stock actual-->
        <label for="">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad">

        <label for="">Stock Minimos</label>
        <input type="text" name="stock_minimo" id="stock_minimo">

        <label for="">Precio</label>
        <input type="number" name="precio" id="precio">

        <label for="">Fecha de Vencimiento</label>
        <input type="text" name="fecha_vencimiento" id="fecha_vencimiento">

        <label for="">Total</label>
        <input type="text" name="total" id="total" readonly>

        <button type="submit">Guardar</button>

    </form>

    <script>
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
    </script>
    
</body>
</html>