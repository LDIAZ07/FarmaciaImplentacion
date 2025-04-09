<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamentos</title>
</head>
<body>

    <h1>Medicamentos</h1>

    <h3><a href="/guardarMedicamento">Guardar Nuevo Medicamento</a></h3>

    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre del Medicamento</td>
                <td>Principio activo</td>
                <td>Presentacion</td>
                <td>Stock Actual</td>
                <td>Stock Minimo</td>
                <td>Precio</td>
                <td>Fecha de Vencimiento</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($lMedicamentos as $medicamentos)

                <tr>
                    <td>{{$medicamentos->id}}</td>
                    <td>{{$medicamentos->nombre}}</td>
                    <td>{{$medicamentos->principio_activo}}</td>
                    <td>{{$medicamentos->presentacion}}</td>
                    <td>{{$medicamentos->stock_actual}}</td>
                    <td>{{$medicamentos->stock_minimo}}</td>
                    <td>{{$medicamentos->precio}}</td>
                    <td>{{$medicamentos->fecha_vencimiento}}</td>
                    </tr>
                   

            @endforeach

        </tbody>
    </table>
    
</body>
</html>