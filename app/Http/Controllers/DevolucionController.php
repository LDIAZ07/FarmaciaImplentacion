<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devolucion;

class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($idVenta)
    {
        //
        return view('devoluciones.devolucion')->with('idVenta', $idVenta);
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
        $devolucion = new Devolucion();
        $devolucion->id_venta = $request->get('idVenta');
        $devolucion->fecha_devolucion = $request->get('fecha');
        $devolucion->motivo = $request->get('motivo');
        $devolucion->save();

        session()->flash('success', 'Devuelto');

        return redirect()->back();
        return view('ventas.ventasTabla');
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
