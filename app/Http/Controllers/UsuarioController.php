<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Proveedor;
use App\Models\User;
use App\Models\Devolucion;
use App\Models\Venta;
use App\Models\Compra;
use App\Models\Medicamento;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
                // Validar los campos
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
        
                // Intentar autenticar
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
        
                    // Obtener usuario autenticado
                    $user = Auth::user();
                    $totalProveedores = Proveedor::count();
                    $totalUsuarios = User::count();
                    $totalDevoluciones = Devolucion::count();
                    $totalVentas = Venta::count();
                    $totalCompras = Compra::count();
                    $totalMedicamentos = Medicamento::count();
                    View::share('usuario', $user->rol);
        
                    // Redireccionar según el rol
                    if ($user->rol === 'admin' || $user->rol === 'empleado') {
                        return view('index', compact(
                            'totalProveedores',
                            'totalUsuarios',
                            'totalDevoluciones',
                            'totalVentas',
                            'totalCompras',
                            'totalMedicamentos'
                        ));
                    } 
                    // elseif ($user->rol === 'empleado') {
                    //     return view('index')->with('usuario', $user->rol);
                    // } 
                    else {
                        return view('login.login');
                    }
                }
        
                // Si falla el login
                return back()->withErrors([
                    'email' => 'Las credenciales no coinciden con nuestros registros.',
                ]);
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
