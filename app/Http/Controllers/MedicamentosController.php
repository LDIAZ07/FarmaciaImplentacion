<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

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
        return view('medicamentos.agregarMedicamento');
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
        $medicamentos->stock_actual = $request->get('stock_actual');
        $medicamentos->stock_minimo = $request->get('stock_minimo');
        $medicamentos->precio = $request->get('precio');
        $medicamentos->fecha_vencimiento = $request->get('fecha_vencimiento');
        $medicamentos->save();
        return redirect('/farmacia');
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
