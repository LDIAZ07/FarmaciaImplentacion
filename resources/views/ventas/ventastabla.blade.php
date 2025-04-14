@extends('layout')

@section('contenido')

@foreach ($ventas as $venta)
    <h3>Venta Cod: #{{ $venta->id }}</h3>
    <p>Método de pago: {{ $venta->metodo_pago }} | Total: ${{ $venta->total }}</p>

    <table border="1" class="tabla-proveedores" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venta->detalles_venta as $detalle)
                <tr>
                    <td>{{ $detalle->medicamento->nombre }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>${{ number_format($detalle->precio_unitario, 2) }}</td>
                    <td>${{ number_format($detalle->cantidad * $detalle->precio_unitario, 2) }}</td>
                    <td><a href="/devolucion/{{$venta->id}}">Devolucion</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endforeach

@endsection