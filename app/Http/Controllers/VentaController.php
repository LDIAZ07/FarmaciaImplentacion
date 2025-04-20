<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\Venta;
use App\Models\Venta_Detalle;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $listaMedicamentos = Medicamento::all();
        return view('ventas.ventas')->with('lMedicamentos', $listaMedicamentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $medicamentoId = $request->get('medicamento_id');
        $medicamento = Medicamento::find($medicamentoId);
        $medicamento->stock_actual = $request->get('stock_restante');
        $medicamento->save();

        $venta = new Venta();
        $venta->total = $request->get('total');
        $venta->metodo_pago = $request->get('metodoPago');
        $venta->save();

        $venta_detalle = new Venta_Detalle();
        $venta_detalle->id_venta = $venta->id;
        $venta_detalle->id_medicamento = $request->get('medicamento_id');
        $venta_detalle->cantidad = $request->get('cantidad');
        $venta_detalle->precio_unitario = $request->get('precio');
        $venta_detalle->save();

        session()->flash('success', 'Venta realizada exitosamente.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
