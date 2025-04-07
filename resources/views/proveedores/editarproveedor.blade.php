<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
</head>
<body>

    <form action="/proveedores/{{$proveedores->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Id</label>
        <input type="text" name="id" id="" value="{{$proveedores->id}}" disabled>

        <label for="">Nombre del Proveedor</label>
        <input type="text" name="nombre" id="" value="{{$proveedores->nombre}}">

        <label for="">Telefono</label>
        <input type="text" name="telefono" id="" value="{{$proveedores->telefono}}">

        <label for="">Correo electronico</label>
        <input type="text" name="email" id="" value="{{$proveedores->email}}">

        <label for="">Creado en</label>
        <input type="text" name="creado_en" id="" value="{{$proveedores->creado_en}}">

        
        <button type="submit">Guardar</button>

    </form>
    
</body>
</html>