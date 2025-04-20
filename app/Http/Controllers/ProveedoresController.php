<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedoresController extends Controller
{
  
    public function index()
    {
        
        $listaProveedores = Proveedor::all(); 
        return view('proveedores.proveedor')->with('lProveedores', $listaProveedores);
    }

  
    public function create()
    {
        return view('proveedores.agregarProveedor');
    }

   
    public function store(Request $request)
    {
        $proveedores = new Proveedor(); 
        $proveedores->nombre = $request->get('nombre');
        $proveedores->telefono = $request->get('telefono');
        $proveedores->email = $request->get('email');
        $proveedores->save();

        session()->flash('success', 'Proveedor agregado correctamente.');
        return redirect()->back();

    }

  
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $proveedores = Proveedor::find($id); 
        return view('proveedores.editarProveedor')->with('proveedores', $proveedores);
    }


    public function update(Request $request, string $id)
    {
        $proveedores = Proveedor::find($id); 
        $proveedores->nombre = $request->get('nombre');
        $proveedores->telefono = $request->get('telefono');
        $proveedores->email = $request->get('email');
        $proveedores->save();
        return redirect('/proveedor');
    }


    public function destroy(string $id)
    {
        $eliminar = Proveedor::find($id);
        $eliminar->delete();
        return redirect('/proveedor');
    }
}