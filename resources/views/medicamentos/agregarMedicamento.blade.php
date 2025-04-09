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

        <label for="">Principio Activo</label>
        <input type="text" name="principio_activo" id="">

        <label for="">Presentacion</label>
        <input type="text" name="presentacion" id="">

        <label for="">Stock Actual</label>
        <input type="text" name="stock_actual" id="">

        <label for="">Stock Minimos</label>
        <input type="text" name="stock_minimo" id="">

        <label for="">Precio</label>
        <input type="text" name="precio" id="">

        <label for="">Fecha de Vencimiento</label>
        <input type="text" name="fecha_vencimiento" id="">

        <button type="submit">Guardar</button>

    </form>
    
</body>
</html>