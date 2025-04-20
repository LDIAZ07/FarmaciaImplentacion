@extends('layout')

@section('contenido')

<h2>Realizar Venta</h2>
    <div class="formulario-container-ventas">
        <form action="/ventas" method="post">
            @csrf

            <div class="formulario-ventas">
                <label for="">Nombre Medicamento</label>
                <select id="medicamento" name="medicamento">
                    <option value="" selected disabled>Seleccione un medicamento</option>
                    @foreach ($lMedicamentos as $medicamentos)
                        <option value="{{$medicamentos->nombre}}" data-precio="{{$medicamentos->precio}}" data-id="{{$medicamentos->id}}" data-stock="{{$medicamentos->stock_actual}}">
                            {{$medicamentos->nombre}}
                        </option>
                    @endforeach
                </select>
                <input type="hidden" name="medicamento_id" id="medicamento_id">
                <input type="hidden" name="stock_actual" id="stock_actual">
                <input type="number" name="stock_restante" id="stock_restante" readonly hidden>
            </div>

            <div class="formulario-ventas">
                <label for="">Cantidad</label>
                <input type="number" min="1" max="20" name="cantidad" id="cantidad" value="1" disabled>
            </div>

            <div class="formulario-ventas">
                <label for="">Precio</label>
                <input type="text" name="precio" id="precio" readonly>
            </div>

            <div class="formulario-ventas">
                <label for="">Metodo de Pago</label>
                <select id="metodoPago" name="metodoPago">
                    <option value="tarjeta">Tarjeta</option>
                    <option value="efectivo">Efectivo</option>
                </select>
            </div>

            <div class="formulario-ventas">
                <label for="">Total</label>
                <input type="text" name="total" id="total" readonly>
            </div>

            <div class="formulario-ventas">
                <button id="submit" type="submit" disabled>Completar Venta</button>
            </div>

            <h4 id="warning-txt">.....</h4>

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>

    <script>
        const selectMedicamento = document.getElementById('medicamento');
        const inputPrecio = document.getElementById('precio');
        const inputCantidad = document.getElementById('cantidad');
        const inputTotal = document.getElementById('total');
        const inputMedicamentoId = document.getElementById('medicamento_id');
        const inputMedicamentoStock = document.getElementById('stock_actual');
        const inputStockRestante = document.getElementById('stock_restante');

        function actualizarPrecioYTotal() {
            const selectedOption = selectMedicamento.options[selectMedicamento.selectedIndex];
            const precio = parseFloat(selectedOption.getAttribute('data-precio')) || 0;
            const cantidad = parseInt(inputCantidad.value) || 0;
            const medicamentoId = selectedOption.getAttribute('data-id') || "";
            const stock_actual = parseInt(selectedOption.getAttribute('data-stock')) || 0;

            inputPrecio.value = precio.toFixed(2);
            inputTotal.value = (precio * cantidad).toFixed(2);
            inputMedicamentoId.value = medicamentoId;
            inputMedicamentoStock.value = stock_actual;
            inputStockRestante.value = stock_actual - cantidad;

            if (cantidad >= stock_actual) {
                document.getElementById("warning-txt").innerText = "LA CANTIDAD EXCEDE EL STOCK ACTUAL";
                document.getElementById("submit").disabled = true;
            } else {
                document.getElementById("warning-txt").innerText = ".....";
                document.getElementById("submit").disabled = false;
                inputCantidad.disabled = false;
            }
        }

        selectMedicamento.addEventListener('change', actualizarPrecioYTotal);
        inputCantidad.addEventListener('input', actualizarPrecioYTotal);
    </script>
@endsection




 