<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\Proveedor;
use App\Models\Compra;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $listaMedicamentos = Medicamento::all(); 
        return view('medicamentos.medicamentos')->with('lMedicamentos', $listaMedicamentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $listaProveedor = Proveedor::all();
        return view('medicamentos.agregarMedicamento')->with('lProveedor', $listaProveedor);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $medicamentos = new Medicamento(); 
        $medicamentos->nombre = $request->get('nombre');
        $medicamentos->principio_activo = $request->get('principio_activo');
        $medicamentos->presentacion = $request->get('presentacion');
        $medicamentos->stock_actual = $request->get('cantidad');
        $medicamentos->stock_minimo = $request->get('stock_minimo');
        $medicamentos->precio = $request->get('precio');
        $medicamentos->fecha_vencimiento = $request->get('fecha_vencimiento');
        $medicamentos->save();

        $medicamentoId = Medicamento::orderBy('id', 'desc')->first()->id;
        $compra = new Compra();
        $compra->id_medicamento = $medicamentoId;
        $compra->id_proveedor = $request->get('proveedor_id');
        $compra->cantidad = $request->get('cantidad');
        $compra->precio_unitario = $request->get('precio');
        $compra->save();
        session()->flash('success', 'Compra realizada exitosamente.');

        return redirect()->back();
        // return redirect('/farmacia');
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
