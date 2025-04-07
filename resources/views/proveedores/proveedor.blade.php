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
                <td>Creado en</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($lProveedores as $proveedores)

                <tr>
                    <td>{{$proveedores->id}}</td>
                    <td>{{$proveedores->nombre}}</td>
                    <td>{{$proveedores->telefono}}</td>
                    <td>{{$proveedores->email}}</td>
                    <td>{{$proveedores->creado_en}}</td>
                    </tr>
                   

            @endforeach

        </tbody>
    </table>
    
</body>
</html>