<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
</head>
<body>

    <h1>Devolucion</h1>


    <form action="/devolucion" method="post">
    @csrf
        <input type="number" id="idVenta" name="idVenta" value="{{$idVenta}}" readonly hidden>
        <input type="text" id="fecha" name="fecha" value="2025-04-08" readonly hidden>

        <textarea rows="4" cols="30" id="motivo" name="motivo" placeholder="Escriba el motivo..." ></textarea>

        <button type="submit">Realizar Devolucion</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
</body>
</html>