<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proveedor</title>
</head>
<body>

    <form action="/proveedor" method="post">
        @csrf
        <label for="">Nombre del Proveedor</label>
        <input type="text" name="nombre" id="">

        <label for="">Telefono</label>
        <input type="text" name="telefono" id="">

        <label for="">Correo electronico</label>
        <input type="text" name="email" id="">

        <button type="submit">Guardar</button>

    </form>
    
</body>
</html>