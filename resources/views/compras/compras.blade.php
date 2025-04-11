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