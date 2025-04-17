@extends('layout')

@section('contenido')
<h1>Editar Proveedor</h1>
    <form action="/updateProveedores/{{$proveedores->id}}" method="post" class="formulario-devolucion">
        @csrf
        @method('PUT')
        <!-- <label for="">Id</label> -->
        <input type="text" name="id" id="" value="{{$proveedores->id}}" disabled hidden>

        <label for="">Nombre del Proveedor</label>
        <input type="text" name="nombre" id="" value="{{$proveedores->nombre}}">

        <label for="">Telefono</label>
        <input type="text" name="telefono" id="" value="{{$proveedores->telefono}}">

        <label for="">Correo electronico</label>
        <input type="text" name="email" id="" value="{{$proveedores->email}}">

        <!-- <label for="">Creado en</label>
        <input type="text" name="creado_en" id="" value="{{$proveedores->creado_en}}"> -->

        
        <button type="submit">Guardar</button>

    </form>

@endsection