@extends('layout')

@section('contenido')
    <h1>Devolución</h1>

    <form action="/devolucion" method="post" class="formulario-devolucion">
        @csrf

        <label for="fecha">Fecha</label>
        <input type="text" id="fecha" name="fecha" value="2025-04-08" readonly>

        <label for="idVenta">Código de Venta</label>
        <input type="text" id="idVenta" name="idVenta" value="{{ $idVenta }}" readonly>

        <label for="motivo">Motivo</label>
        <textarea id="motivo" name="motivo" placeholder="Escriba el motivo..."></textarea>

        <button type="submit">Completar Devolución</button>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
    </form>
    
@endsection