@extends('layout')

@section('contenido')

@foreach ($ventas as $venta)
    <h3>Venta Cod: #{{ $venta->id }}</h3>
    <p>Método de pago: {{ $venta->metodo_pago }} | Total: ${{ $venta->total }}</p>
    @if($venta->devoluciones->count() > 0)
        <p style="color:red;"><strong>Venta con devoluciones:</strong></p>
        <ul>
            @foreach ($venta->devoluciones as $devolucion)
                <li>Fecha: {{ $devolucion->fecha_devolucion }} | Motivo: {{ $devolucion->motivo }}</li>
            @endforeach
        </ul>
    @endif

    <table border="1" class="tabla-proveedores" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venta->detalles_venta as $detalle)
                <tr>
                    <td>{{ $detalle->medicamento->nombre }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>${{ number_format($detalle->precio_unitario, 2) }}</td>
                    <td>${{ number_format($detalle->cantidad * $detalle->precio_unitario, 2) }}</td>
                    <td>
                        @if($venta->devoluciones->count() > 0)
                            Devuelta
                        @else
                            Completada
                        @endif
                    </td>
                    <td>
                        @if($venta->devoluciones->isEmpty())
                            <a href="/devolucion/{{ $venta->id }}">Devolución</a>
                        @else
                            —
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endforeach

@endsection