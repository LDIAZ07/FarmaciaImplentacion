@extends('layout')

@section('contenido')

    <h1>Medicamentos</h1>

    <table class="table tabla-proveedores">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Medicamento</th>
                <th>Principio activo</th>
                <th>Presentacion</th>
                <th>Stock Actual</th>
                <th>Stock Minimo</th>
                <th>Precio</th>
                <th>Fecha de Vencimiento</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($lMedicamentos as $medicamentos)

                <tr>
                    <td>{{$medicamentos->id}}</td>
                    <td>{{$medicamentos->nombre}}</td>
                    <td>{{$medicamentos->principio_activo}}</td>
                    <td>{{$medicamentos->presentacion}}</td>
                    @if ((int) $medicamentos->stock_actual <= 7)
                        <td style="color: red;"><b>{{$medicamentos->stock_actual}}</b></td>
                    @else
                        <td>{{$medicamentos->stock_actual}}</td>
                    @endif
                    <td>{{$medicamentos->stock_minimo}}</td>
                    <td>{{$medicamentos->precio}}</td>
                    <td>{{$medicamentos->fecha_vencimiento}}</td>
                    </tr>
                   

            @endforeach

        </tbody>
    </table>

    <script>
        window.addEventListener('load', () => {
            const stock = parseInt(document.getElementById('stock'));
            if(stock < 7){

            }
        });
    </script>
    
@endsection